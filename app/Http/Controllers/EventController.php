<?php

namespace App\Http\Controllers;

use App\models\Event;

class EventController extends Controller
{
    public function event (){
        $events = Event::where('status', 2)->get();
        $all_events = Event::all();
        foreach($events as $event) {
            dump($event->name, $event->status);
        }
        dump('end_collection_STATUS=2');
        foreach ($all_events as $one_event) {
            dump($one_event->name);
        }
        dump('end_collection_ALL_EVENTS_NAME');
    }
}
