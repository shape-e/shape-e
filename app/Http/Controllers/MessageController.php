<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mensajes($URL){
        return Message::with('user')->where('url', $URL)->get();
    }

    public function agregarMensaje(){
        $user = Auth::user();
        
        $user->messages()->create([
            'message' => request()->get('message'),
            'url' => request()->get('url')
        ]);


        return ['status' => 'OK'];
    }
}
