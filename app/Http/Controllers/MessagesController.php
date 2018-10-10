<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {

        try {
            $this->validate($request, [

                'name' => 'required',
                'email' => 'required'


            ]);
        } catch (ValidationException $e) {
        }


        $message = new Message;

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');


        $message->save();

        return redirect('/messages')->with('status','Message Saved');



    }



    public function getMessages()
    {
          $messages = Message::all();


          return view('messages')->with('messages', $messages);


    }
    public function destroy($id)
    {



       $message= Message::find($id);
       $message->delete();
        return redirect('/messages')->with('status','Message Deleted');



    }

}
