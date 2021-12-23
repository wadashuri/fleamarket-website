<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Message;
class MessageController extends Controller
{
    public function index() {
        $messages = Message::all();
        return view('messages.index',[
            'title' => 'ひとこと掲示板',
            'messages' => $messages,
        ]);
    }
    public function store(MessageRequest $request){
 
         $message = Message::create(
          $request->only([
            'name',
            'body'
          ])
        );
        // メッセージ一覧ページにリダイレクト
        return redirect('/messages');
    }
}
