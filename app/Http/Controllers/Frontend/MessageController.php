<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function create()
    {
        return view("frontend.messages.create");
    }

    public function store(MessageRequest $request)
    {
        $message = new Message();
        $message->fill($request->all());
        $message->user_id = auth()->id();
        $message->save();

        return redirect(route('home'))->with('success', "message sent successfully");
    }
}
