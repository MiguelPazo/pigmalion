<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/change-string/{data}', 'HomeController@changeString');
Route::get('/clear-par/{data}', 'HomeController@clearPar');
Route::get('/complete-range/{data}', 'HomeController@completeRange');
