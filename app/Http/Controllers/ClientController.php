<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Client;

class ClientController extends Controller
{
    public function index () {
        $clients = Client::all();
            $num_client = count($clients);
        
        return view('clients.index', compact('clients'), compact('num_client'));
    }

    public function create () {
        return view('clients.create');
    }
    public function store () {
       $data = request()->validate([
           'name' => '',
           'surname' => '',
           'login' => ''
       ]);
       Client::create($data);
       return redirect()->route('clients');
    }

    public function search () {
        return view('clients.req');
    }

    public function query (Request $request) {
        $input = $request->all();
        $data = Client::select('name')
                ->where("name", "LIKE", "%{$input['query']}%")
                ->get();
        return response()->json($data);        
    }
}
