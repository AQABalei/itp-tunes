<?php

//Rout -> Controller -> Load View
Route::middleware(['maintenancemode'])->group(function(){
	Route::get('/', 'InvoicesController@index');
	Route::get('/playlists', 'PlaylistController@index');
	Route::get('/playlists/new', 'PlaylistController@create');
	Route::get('/playlists/{id}', 'PlaylistController@index');
	Route::post('/playlists', 'PlaylistController@store');

	Route::get('/signup', 'SignUpController@index');
	Route::post('/signup', 'SignUpController@signup');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'AdminController@logout');

Route::get('/maintenance', 'MaintenanceController@index');

Route::middleware(['authenticated'])->group(function(){
	Route::get('/settings', 'SettingsController@index');
	Route::post('/settings', 'SettingsController@toggle');
	Route::get('/profile', 'AdminController@index');
	Route::get('/invoices', 'InvoicesController@index');
});