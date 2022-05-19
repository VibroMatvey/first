<?php

namespace App\Http\Controllers;

use App\models\Event;

class EventController extends Controller
{
    public function event (){
        $id = Event::find(1);
        dump($id);
    }
}
