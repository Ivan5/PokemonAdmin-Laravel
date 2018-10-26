<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('trainers','TrainerController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
