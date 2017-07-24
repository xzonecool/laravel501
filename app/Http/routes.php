<?php


Route::get('/', 'WelcomeController@index');

Route::get('pages/aboutus', 'PagesController@aboutus');  
Route::get('pages/location', 'PagesController@location');   
Route::get('pages/copyright', 'PagesController@copyright');  