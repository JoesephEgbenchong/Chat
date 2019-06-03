<?php

namespace App\Http\Controllers;

use App\Events\ChatEvents;
use App\Providers\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //

    public function __construct(){

        $this->middleware('auth');
    }

    public function chat(){

        return view('chat');
    }

    public function send(request $request){

        //$user = User::find(Auth::id());
        $user = Auth::user();
        event(new ChatEvents($request->message,$user));

        return $request->all();
    }

//    public function send(){
//
//        $message = 'Hello';
//        $user = Auth::user();
//        event( new ChatEvents($message, $user));
//    }
}
