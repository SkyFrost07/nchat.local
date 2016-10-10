<?php

namespace Rikkei\Chat\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Rikkei\Chat\Models\Message;

class ChatController extends Controller
{
    public function getIndex(){
        $groups = Message::where('to_user_id', 7)->groupBy('user_id', 'fanpage_id')->get();
        return view('chat::index', compact('groups'));
    }
}
