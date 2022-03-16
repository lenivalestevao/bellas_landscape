<?php
namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()
                ->get('login.id'));
        });

        Fortify::authenticateUsing(function ($request) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $pass = $request->password;
            $email = $request->email;

            // check the md5 password and change md5 to bcrypt if the user was found
            $user = User::where('email', $email)->first();

            if (Hash::check($pass, optional($user)->password)) {
                return $user;
            }

            return null;
        });

        Fortify::verifyEmailView(function () {
            return view('auth.verify');
        });

        Fortify::loginView(function () {
            $page_name = "kt_login_signup_cancel";
            return view('auth.login');
        });

        Fortify::registerView(function () {
            $page_name = "kt_login_signup";
            return view('auth.register');
        });

        Fortify::requestPasswordResetLinkView(function () {
            $page_name = "kt_login_forgot";
            return view('auth.password_reset');
        });

        Fortify::resetPasswordView(function ($request) {
            $page_name = "";
            return view('auth.passwords.reset', [
                'request' => $request
            ], compact('page_name'));
        });

        // register new LoginResponse
        $this->app->singleton(\Laravel\Fortify\Contracts\LoginResponse::class, \App\Http\Responses\LoginResponse::class);
    }
}
