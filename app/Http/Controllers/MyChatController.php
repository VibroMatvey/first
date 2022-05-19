<?php

namespace App\Http\Controllers;



use App\models\Chat;

class MyChatController extends Controller
{
    public function index() {
       $chats = Chat::all();
       dump($chats);
       }
}
