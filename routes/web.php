<?php

//Rout -> Controller -> Load View
Route::get('/', 'InvoicesController@index');
Route::get('/playlists', 'PlaylistController@index');
Route::get('/playlists/new', 'PlaylistController@create');
Route::get('/playlists/{id}', 'PlaylistController@index');
Route::post('/playlists', 'PlaylistController@store');

Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'AdminController@logout');

Route::middleware(['authenticated'])->group(function(){
	Route::get('/profile', 'AdminController@index');
	Route::get('/invoices', 'InvoicesController@index');
});