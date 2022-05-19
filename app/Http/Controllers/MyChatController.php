<?php

namespace App\Http\Controllers;



use App\models\Chat;

class MyChatController extends Controller
{
    public function index() {
       $chat = Chat::all()->first();
       dump($chat->message);
       }
}
