<?php

namespace OGame\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use OGame\Actions\Fortify\CreateNewUser;
use OGame\Actions\Fortify\ResetUserPassword;
use OGame\Actions\Fortify\UpdateUserPassword;
use OGame\Actions\Fortify\UpdateUserProfileInformation;
use OGame\Models\User;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

            return Limit::perMinute(20)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(20)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            return view('outgame.login');
        });

        Fortify::authenticateUsing(function (Request $request) {
            // Task 013: Login diagnostic trace
            $trace = [];
            $trace['at'] = now()->toIso8601String();
            $trace['email_input'] = (string) $request->input('email');
            $trace['has_password_input'] = $request->filled('password');
            $trace['session_id_before'] = session()->getId();
            $trace['session_has_login_key_before'] = collect(session()->all())->keys()->filter(fn($k) => str_contains($k, 'login_'))->values()->all();

            $user = User::where('email', $request->email)->first();

            $trace['user_found'] = $user ? true : false;
            $trace['user_id'] = $user?->id;

            if ($user) {
                $trace['hash_prefix'] = substr($user->password, 0, 4);
                $trace['hash_len'] = strlen($user->password);
                $trace['hash_check'] = Hash::check($request->password, $user->password);
                $trace['is_banned'] = method_exists($user, 'isBanned') ? $user->isBanned() : null;
            }

            if (!$user || !Hash::check($request->password, $user->password)) {
                $trace['reject_reason'] = !$user ? 'user_not_found' : 'hash_mismatch';
                session()->flash('debug_login', $trace);
                return;
            }

            if ($user->isBanned()) {
                $ban   = $user->currentBan();
                $until = $ban?->banned_until
                    ? $ban->banned_until->format('Y-m-d H:i') . ' UTC'
                    : 'permanently';

                $trace['reject_reason'] = 'banned';
                session()->flash('debug_login', $trace);

                throw ValidationException::withMessages([
                    'email' => ["Your account has been banned: {$ban?->reason}. Expires: {$until}."],
                ]);
            }

            $trace['will_return_user'] = true;
            $trace['session_id_after'] = session()->getId();
            session()->flash('debug_login', $trace);

            return $user;
        });

        Fortify::registerView(function () {
            return view('outgame.login');
        });

        /*Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function () {
            return view('auth.reset-password');
        });*/
    }
}
