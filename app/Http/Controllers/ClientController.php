<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Client;

class ClientController extends Controller
{
    public function index () {
        $clients = Client::all();
            $num_client = count($clients);
        
        return view('clients.client', compact('clients'), compact('num_client'));
    }
}
