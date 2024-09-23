<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
            {
                $this->middleware('guest');
            }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
            {
                $message=[
                    'FirstName.string'=>' First Name  is string',
                    'LastName.string'=>' Last Name  is string',
                    'UserName.string'=>' User name  is string',
                    'email.string'=>' email name  is string',


                    'FirstName.required'=>' Fisrt Name  is required',
                    'LastName.required'=>' Last Name  is required',
                    'UserName.required'=>' User name  is required',
                    'email.required'=>' email name  is required',
                    'password.required'=>' password  is required',
                    'password_confirmation.required'=>' you forgot to confirm your password',

                    'FirstName.alpha'=>' Fisrt Name  is alphabatical',
                    'LastName.alpha'=>' Last Name  is alphabatical',
                    'UserName.unique'=>' User name  is  taken',
                    'email.unique'=>' email is taken',
                    'email.email'=>' should be written in email format',
                    'password.alpha_num'=>' password  is letters and numbers only',
                    'Password.confirmed'=>' password  $ confimation is not matching',
                    'Password.min'=>' password  must be 8 characters at least',

                    ];
                return Validator::make($data, [

                    'FirstName'=>'required|string|max:30|alpha',
                    'LastName'=>'required|string|max:30|alpha',
                    'UserName'=>'required|string|unique:users,UserName|max:30|regex:/^[a-zA-Z0-9_.-]+$/',
                    'email' =>'required|string|email|unique:users,email|max:255',
                    'password'=>'required|min:8|confirmed|alpha_num',

                ], $message);
            }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
            {
                return User::create([
                    'FirstName' => $data['FirstName'],
                    'LastName' => $data['LastName'],
                    'UserName' => $data['UserName'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'active' => 0,


                ]);

            }



}
