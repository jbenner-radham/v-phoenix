<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);
Route::resource('calendars', 'CalendarController');
Route::resource('events', 'EventController');
Route::resource('leads', 'LeadController');
Route::resource('vcards', 'VCardController');
