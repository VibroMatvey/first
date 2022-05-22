<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo '<a href="/chat">', "chat", '</a>';
    echo '<br>', '<a href="/event">', "event", '</a>';
    echo '<br>', '<a href="/clients">', "clients", '</a>';
    echo '<br>', '<a href="/requests">', "requests", '</a>';
});

Route::get('/chat', 'MyChatController@index');

Route::get('/event', 'EventController@event');

Route::get('/event/create', 'EventController@create');
Route::get('/event/update', 'EventController@update');
Route::get('/event/delete', 'EventController@delete');
Route::get('/event/restore', 'EventController@restore');
Route::get('/event/FirstOrCreate', 'EventController@FirstOrCreate');

Route::get('clients/requests', 'ClientController@search')->name('req');
Route::get('clients/requests/query', 'ClientController@query')->name('query');
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/create', 'ClientController@create')->name('create');
Route::post('/clients', 'ClientController@store')->name('store');




