<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageCotnroller extends Controller
{
    public function index()
    {
        $messages = Message::with('user')
            ->where("is_read", '=', 0)
            ->orderByDesc('id')
            ->get();

        return view('admin.home', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::query()->find($id);
        $message->is_read = true;

        $message->save();

        $messages = Message::with('user')
            ->where("is_read", '=', 0)
            ->orderByDesc('id')
            ->get();

        return view('admin.messages.show', compact('message', 'messages'));

    }
}
