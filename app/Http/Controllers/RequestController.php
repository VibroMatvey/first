<?php

namespace App\Http\Controllers;

use App\models\Request;
use App\models\Client;
use mysqli;

class RequestController extends Controller
{
    public function requests () {

        $requests = Request::all();
        $clients = Client::all();

        return view('req', compact('requests', 'clients'));
    }
}
