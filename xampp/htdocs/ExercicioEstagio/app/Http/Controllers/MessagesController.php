<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request) 
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'
        ]);

        //cria uma nova mensagem
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //guardar mensagem
        $message->save();

        //Voltar á página inicial
        return redirect('/')->with('success','Message Sent');
    }
}
