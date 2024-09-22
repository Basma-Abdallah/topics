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
      // Override login method
      protected function attemptLogin(Request $request)
      {
          $credentials = $this->credentials($request);

          // Adding 'active' to credentials check (active = 1)
          $credentials['active'] = 1;

          return Auth::attempt($credentials, $request->filled('remember'));
      }

      // Optionally customize credentials method if needed
      protected function credentials(Request $request)
      {
          return $request->only($this->username(), 'password');
      }

      // Customize the failed login response to show custom error message for inactive users
      protected function sendFailedLoginResponse(Request $request)
      {
          $user = \App\Models\User::where($this->username(), $request->{$this->username()})->first();

          if ($user && !$user->active) {
              throw ValidationException::withMessages([
                  $this->username() => ['Your account is not active yet.'],
              ]);
          }

          throw ValidationException::withMessages([
              $this->username() => [trans('auth.failed')],
          ]);
      }
}
