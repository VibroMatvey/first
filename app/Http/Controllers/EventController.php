<?php

namespace App\Http\Controllers;

use App\models\Event;

class EventController extends Controller
{
    public function event (){
        echo '<a href="event/create">', "create", '</a>';
        echo '<br>', '<a href="event/update">', "update", '</a>';
        echo '<br>', '<a href="event/delete">', "delete", '</a>';
        echo '<br>', '<a href="event/restore">', "restore", '</a>';
        echo '<br>', '<a href="event/FirstOrCreate">', "FirstOrCreate", '</a>';
        echo '<br>', '<a href="/">', "back", '</a>';
        $events = Event::where('status', 0)->get();
        $all_events = Event::all();
        foreach($events as $event) {
            dump($event->name, $event->status);
        }
        dump('end_collection_STATUS=0');
        foreach ($all_events as $one_event) {
            dump($one_event->name);
        }
        dump('end_collection_ALL_EVENTS_NAME');
    }

    public function create (){
        $eventArr = [
            ['name' => 'event',
            'start' => '2022-05-20 14:15:34',
            'status' => '0'],
            ['name' => 'another event',
            'start' => '2022-05-21 14:15:34',
            'status' => '0']
        ];

        foreach ($eventArr as $item) {
            Event::create($item);
        };

        dump('created!');
        echo '<a href="/event">', "back", '</a>';
    }

    public function update (){
        echo '<a href="/event">', "back", '</a>';
        $id = Event::find(1);
        $id->update([
            'name' => 'eventUpdated2',
        ]);
        dd('updated!');
    }

    public function delete () {
        echo 'delete page)';
        echo '<br>', '<a href="/event">', "back", '</a>';

        $id = Event::find(5);
        $id->delete();
        dd('deleted!');
    }

    public function restore () {
        echo 'restore page)';
        echo '<br>', '<a href="/event">', "back", '</a>';

        $id = Event::withTrashed()->find(5);
        $id->restore();
        dd('restore!');

    }

    public function FirstOrCreate () {
        echo 'FirstOrCreate page)';
        echo '<br>', '<a href="/event">', "back", '</a>';

        $id = Event::find(5);
        $anotherEvent = [
            'name' => 'new event',
            'start' => '2022-05-24 14:15:34',
            'status' => '0'
        ];
        
        $check = Event::FirstOrCreate([
            'status' => 0
        ], $anotherEvent);

        dump($check->name);
        dd('restore!');

    }
}
