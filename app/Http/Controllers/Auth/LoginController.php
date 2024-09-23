<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function username()
            {
                return 'UserName';
            }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
            {
                $this->middleware('guest')->except('logout');
                $this->middleware('auth')->only('logout');
            }

      protected function attemptLogin(Request $request)
            {
                $credentials = $this->credentials($request);
                $credentials['active'] = 1;
                return Auth::attempt($credentials, $request->filled('remember'));
            }


      protected function credentials(Request $request)
            {
                return $request->only($this->username(), 'password');
            }

      protected function sendFailedLoginResponse(Request $request)
            {
                $user = \App\Models\User::where($this->username(), $request->{$this->username()})->first();

                if ($user && !$user->active) {
                    throw ValidationException::withMessages([
                        $this->username() => ['Your account is not active yet.please contact website admin '],
                    ]);
                }

                throw ValidationException::withMessages([
                    $this->username() => [trans('auth.failed')],
                ]);
            }
}
