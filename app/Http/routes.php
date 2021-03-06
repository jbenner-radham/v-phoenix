<?php

Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);


// Entity 'Kinds'
// **********
Route::get('entities/individuals',          ['as' => 'individuals',     'uses' => 'EntityController@individualsIndex']);
Route::get('entities/groups',               ['as' => 'groups',          'uses' => 'EntityController@groupsIndex']);
Route::get('entities/locations',            ['as' => 'locations',       'uses' => 'EntityController@locationsIndex']);
Route::get('entities/organizations',        ['as' => 'organizations',   'uses' => 'EntityController@organizationsIndex']);
Route::get('entities/devices',              ['as' => 'devices',         'uses' => 'EntityController@devicesIndex']);
Route::get('entities/applications',         ['as' => 'applications',    'uses' => 'EntityController@applicationsIndex']);

Route::post('entities/delete/{id}',         ['as' => 'delete-entity',   'uses' => 'EntityController@destroy']);

Route::resource('contacts', 'ContactController');
Route::resource('calendars', 'CalendarController');
Route::resource('documents', 'DocumentController');
Route::resource('entities', 'EntityController');
Route::resource('events', 'EventController');
Route::resource('leads', 'LeadController');
Route::resource('opportunities', 'OpportunityController');
