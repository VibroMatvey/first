<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Client;

class ClientController extends Controller
{
    public function index () {
        $clients = Client::all();
        foreach ($clients as $item) {
            dump($item->name);
        }
    }
}
