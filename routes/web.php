<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/change-string', 'HomeController@changeString');
Route::get('/clear-par', 'HomeController@clearPar');
Route::get('/complete-range', 'HomeController@completeRange');
