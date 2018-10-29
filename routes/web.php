<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('trainers','TrainerController');
Route::resource('pokemons','PokemonController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
