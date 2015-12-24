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


// Entity 'Kinds'
// **********
Route::get('entities/individuals', ['as' => 'individuals', 'uses' => 'EntityController@individualsIndex']);
Route::get('entities/groups', ['as' => 'groups', 'uses' => 'EntityController@groupsIndex']);
Route::get('entities/locations', ['as' => 'locations', 'uses' => 'EntityController@locationsIndex']);
Route::get('entities/organizations', ['as' => 'organizations', 'uses' => 'EntityController@organizationsIndex']);
Route::get('entities/devices', ['as' => 'devices', 'uses' => 'EntityController@devicesIndex']);
Route::get('entities/applications', ['as' => 'applications', 'uses' => 'EntityController@applicationsIndex']);


Route::resource('calendars', 'CalendarController');
Route::resource('events', 'EventController');
Route::resource('leads', 'LeadController');
Route::resource('opportunities', 'OpportunityController');
Route::resource('entities', 'EntityController');
