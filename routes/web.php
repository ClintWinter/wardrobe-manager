<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('landing');
});

// Pieces
Route::get('/wardrobe', 'PieceController@index');
