<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{

    public function contactusForm()
            {

                return view ('public.contact')->with('title', 'Contact us Form');;
            }
            
    public function contactUs(request $request)
            {

                $message=[
                    'Name.string'=>'  Name  is string',
                    'Subject.string'=>' Subject  is string',
                    'Content.string'=>'Content  is string',
                    'Email.string'=>' Email  is string',

                    'Name.required'=>' Fisrt Name  is required',
                    'Subject.required'=>' Subject  is required',
                    'Content.required'=>'Content  is required',
                    'Content.max'=>'Content  should not exceeded 300 characters',
                    'Email.required'=>' Email name  is required',

                    'Email.email'=>' should be written in email format',

                    ];

                $data= $request->validate([
                'Name'=>'required|string|max:30|alpha',
                'Subject'=>'required|string|max:30|alpha_num',
                'Content'=>'required|string|max:300',
                'Email' =>'required|email',
                ] , $message);
                $data['ReadCondition']=0;

                //dd($data);
            //dd($request->all());
                Message::create($data);
                Mail::to('engbasmamohamad@gmail.com')->send(new ContactUsMail($request->all()));
                return back()->with('Success','Your message has been sent successfully!');
            }
}
