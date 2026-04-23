<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use OGame\Models\User;
use Tests\TestCase;

class UsersManagementTest extends TestCase
{
    use RefreshDatabase;

    private function makeAdmin(): User
    {
        $user = User::factory()->create();
        $user->assignRole('admin');
        return $user;
    }

    public function test_guest_cannot_access_users_index(): void
    {
        $response = $this->get('/admin/users');
        $response->assertStatus(302);
    }

    public function test_non_admin_cannot_access_users_index(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/admin/users');
        $response->assertStatus(302);
    }

    public function test_admin_can_list_users(): void
    {
        $admin = $this->makeAdmin();
        User::factory()->count(3)->create();

        $response = $this->actingAs($admin)->get('/admin/users');
        $response->assertOk();
        $response->assertSee('User Management');
    }

    public function test_admin_can_view_user_detail(): void
    {
        $admin  = $this->makeAdmin();
        $target = User::factory()->create();

        $response = $this->actingAs($admin)->get("/admin/users/{$target->id}");
        $response->assertOk();
        $response->assertSee($target->email);
        $response->assertSee($target->username);
    }

    public function test_admin_can_grant_role(): void
    {
        $admin  = $this->makeAdmin();
        $target = User::factory()->create();

        $response = $this->actingAs($admin)
            ->postJson("/admin/users/{$target->id}/role", [
                'role'  => 'admin',
                'grant' => true,
            ]);

        $response->assertOk();
        $response->assertJson(['ok' => true, 'has_role' => true]);

        $target->refresh();
        $this->assertTrue($target->hasRole('admin'));
    }

    public function test_admin_cannot_revoke_own_admin(): void
    {
        $admin = $this->makeAdmin();

        $response = $this->actingAs($admin)
            ->postJson("/admin/users/{$admin->id}/role", [
                'role'  => 'admin',
                'grant' => false,
            ]);

        $response->assertStatus(422);
        $response->assertJson(['ok' => false, 'error' => 'cannot_revoke_own_admin']);

        $admin->refresh();
        $this->assertTrue($admin->hasRole('admin'));
    }

    public function test_search_filters_users_by_email(): void
    {
        $admin = $this->makeAdmin();
        User::factory()->create(['email' => 'alpha@example.com', 'username' => 'alpha']);
        User::factory()->create(['email' => 'beta@example.com', 'username' => 'beta']);

        $response = $this->actingAs($admin)->get('/admin/users?q=alpha');
        $response->assertOk();
        $response->assertSee('alpha@example.com');
        $response->assertDontSee('beta@example.com');
    }

    public function test_admin_can_revoke_other_user_admin_role(): void
    {
        $admin  = $this->makeAdmin();
        $target = User::factory()->create();
        $target->assignRole('admin');

        $response = $this->actingAs($admin)
            ->postJson("/admin/users/{$target->id}/role", [
                'role'  => 'admin',
                'grant' => false,
            ]);

        $response->assertOk();
        $response->assertJson(['ok' => true, 'has_role' => false]);

        $target->refresh();
        $this->assertFalse($target->hasRole('admin'));
    }
}
