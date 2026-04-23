<?php

namespace OGame\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use OGame\Http\Controllers\OGameController;
use OGame\Models\Planet;
use OGame\Models\User;

class UsersController extends OGameController
{
    private const PER_PAGE = 25;

    /**
     * Display a listing of users with search and sort capabilities.
     */
    public function index(Request $request): View
    {
        $q    = trim((string) $request->query('q', ''));
        $sort = $request->query('sort', 'id');
        $dir  = $request->query('dir', 'desc') === 'asc' ? 'asc' : 'desc';

        $sortable = ['id', 'created_at', 'time'];
        if (!in_array($sort, $sortable, true)) {
            $sort = 'id';
        }

        $users = User::query()
            ->when($q !== '', function ($query) use ($q) {
                $query->where(function ($w) use ($q) {
                    $w->where('email', 'like', "%{$q}%")
                      ->orWhere('username', 'like', "%{$q}%");
                });
            })
            ->orderBy($sort, $dir)
            ->paginate(self::PER_PAGE)
            ->withQueryString();

        // Eager load roles to avoid N+1 queries
        $users->load('roles');

        return view('ingame.admin.users.index', [
            'users' => $users,
            'q'     => $q,
            'sort'  => $sort,
            'dir'   => $dir,
        ]);
    }

    /**
     * Display the specified user with their planets and roles.
     */
    public function show($id): View
    {
        $user = User::with('roles')->findOrFail($id);

        // Get planets for this user
        $planets = Planet::where('user_id', $user->id)->get();

        return view('ingame.admin.users.show', [
            'user'    => $user,
            'planets' => $planets,
        ]);
    }

    /**
     * Toggle admin role for a user.
     */
    public function toggleRole(Request $request, $id): JsonResponse
    {
        $request->validate([
            'role'  => 'required|in:admin',
            'grant' => 'required|boolean',
        ]);

        $target = User::findOrFail($id);
        $actor  = Auth::user();

        // Prevent self-revocation of admin role
        if ($actor && $actor->id === $target->id
            && $request->boolean('grant') === false
            && $request->input('role') === 'admin') {
            return response()->json([
                'ok'    => false,
                'error' => 'cannot_revoke_own_admin',
            ], 422);
        }

        $roleName = $request->input('role');
        $grant    = $request->boolean('grant');

        DB::transaction(function () use ($target, $roleName, $grant) {
            if ($grant) {
                if (!$target->hasRole($roleName)) {
                    $target->assignRole($roleName);
                }
            } else {
                if ($target->hasRole($roleName)) {
                    $target->removeRole($roleName);
                }
            }
        });

        $target->refresh();

        return response()->json([
            'ok'       => true,
            'user_id'  => $target->id,
            'role'     => $roleName,
            'has_role' => $target->hasRole($roleName),
        ]);
    }
}
