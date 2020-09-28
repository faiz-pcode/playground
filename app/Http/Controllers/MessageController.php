<?php

namespace App\Http\Controllers;

use App\Message;
use App\Events\NewMessageNotification;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $data = array('user_id' => $user_id);

        return view('websocket.broadcast', $data);
    }

    public function send()
    {
        // ...

        // message is being sent
        $message = new Message;
        $message->setAttribute('from', 1);
        $message->setAttribute('to', 2);
        $message->setAttribute('message', 'Demo message from user 1 to user 2.');
        $message->save();

        // Trigger NewMessageEvent
        event(new NewMessageNotification($message));

        // ...
    }
}
