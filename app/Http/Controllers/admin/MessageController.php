<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function mess()
            {
                $messages=Message::select()->get();
                //dd($messages);
                return view('admin.messages' , compact('messages'));
            }

     public function messDetails(string $id)
            {
                  $message =Message::findOrFail($id);
                  $message->ReadCondition = 1;
                  $message->save();
                 // dd($message);
                  return view('admin.message_details' , compact('message'));
            }

    public function DelMess(string $id)
            {
                Message::where('id',$id)->delete();
                return redirect()->route('mess')->with('delete' ,'you deleted message successfully');
            }

}
