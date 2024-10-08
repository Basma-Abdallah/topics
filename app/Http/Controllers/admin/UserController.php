<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function users()
        {

            $users=User::select()->get();

            return view('admin.users',compact('users'));
        }


    public function adduser()
        {

            return view('admin.add_user');
        }


    public function storeUser(Request $request)
        {

            $message=[
                'FirstName.string'=>' Fisrt Name  is string',
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
                'username.regex' => 'The username can only contain letters, numbers, underscores, dashes, and dots.',
                'email.unique'=>' email is taken',
                'email.email'=>' should be written in email format',
                'password.alpha_num'=>' password  is letters and numbers only',
                'Password.confirmed'=>' password  $ confimation is not matching',
                'Password.min'=>' password  must be 8 characters at least',

                ];

            $data= $request->validate([
            'FirstName'=>'required|string|max:30|alpha',
            'LastName'=>'required|string|max:30|alpha',
            'UserName'=>'required|string|unique:users,UserName|max:30|regex:/^[a-zA-Z0-9_.-]+$/',
            'email' =>'required|email|unique:users,email',
            'password'=>'required|min:8|confirmed|alpha_num',
            ] , $message);
            $data['active']=1;
            $data ['email_verified_at']= now()->format('Y-m-d H:i:s');

            // dd($data);

            User::create($data);
            return redirect()->route('users')->with('add','user added successfully');
        }


    public function edituser(string $id)
        {

            $user = User::findOrfail($id);
            //dd($user);
            return view('admin.edit_user' , compact('user'));
        }



    public function updateUser(Request $request, $id)
        {
            $user = User::findOrFail($id);

            $message = [
                'FirstName.string' => 'First Name must be a string',
                'LastName.string' => 'Last Name must be a string',
                'UserName.string' => 'User name must be a string',
                'email.string' => 'Email must be a string',

                'FirstName.required' => 'First Name is required',
                'LastName.required' => 'Last Name is required',
                'UserName.required' => 'User name is required',
                'email.required' => 'Email is required',

                'UserName.unique' => 'User name is already taken',
                'email.unique' => 'Email is already taken',
                'FirstName.alpha' => 'First Name must be alphabetic',
                'LastName.alpha' => 'Last Name must be alphabetic',
                'username.regex' => 'The username can only contain letters, numbers, underscores, dashes, and dots.',
                'email.email' => 'Email must be a valid email address',
                'password.alpha_num' => 'Password must contain letters and numbers only',
                'password.min' => 'Password must be at least 8 characters long',
            ];

            $validationRules = [
                'FirstName' => 'required|string|max:30|alpha',
                'LastName' => 'required|string|max:30|alpha',
                'UserName' => [
                    'required',
                    'string',
                    'max:30',
                    'regex:/^[a-zA-Z0-9_.-]+$/',
                    Rule::unique('users', 'UserName')->ignore($user->id),
                ],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users', 'email')->ignore($user->id),
                ],
            ];

            if ($request->filled('password')) {
                $validationRules['password'] = 'required|min:8|alpha_num';
            }

            $data = $request->validate($validationRules, $message);

            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->password);
            } else {

                unset($data['password']);
            }

            $data['active'] = $request->has('active') ? 1 : 0;


            $data['updated_at'] = now()->format(' d M Y');

            // dd($data);


            $user->update($data);

            return redirect()->route('users')->with('edited', 'User updated successfully');
        }




    
}
