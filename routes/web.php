<?php

//Begin dashboard area
Route::get('/v1/dashboard','DashboardController@index')->name('dashbord_index');
//end dashboard area

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
