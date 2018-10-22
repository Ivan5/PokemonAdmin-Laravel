<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('trainers','TrainerController');