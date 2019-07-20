<?php


Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/services','HomeController@services');
Route::get('contact','HomeController@contact');

