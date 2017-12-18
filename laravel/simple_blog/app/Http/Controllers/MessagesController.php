<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
     public function submit(Request $request){
       /*  return $request->input('name'); */
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required'
       ]);

       //Laravel Eloquent
       //Create new message

       //Create an object of Message
       $message = new Message;
       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->message = $request->input('message');

       //Save message
       $message->save();
       
       //Redirect
       return redirect('/')->with('success', 'Message Sent');

    }

    public function getMessages(){
        $messages = Message::all();

        return view('pages.messages')->with('messages', $messages);
    }
}
