<?php

namespace App\Http\Controllers;

//use App\models\RequestData;
use App\Http\Requests\ClientRequest;
use App\models\Client;
use Illuminate\Http\Request;

//use mysqli;

class RequestController extends Controller
{

    public function index () {

        return view('req');
    }

    public function query (Request $request) {
        $input = $request->all();
        $data = Client::select("name")
                ->where("name", "LIKE", "%{$input['query']}%")
                ->get();
        return response()->json($data);        
    }
}
