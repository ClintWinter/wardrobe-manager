<?php

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('landing');
})->name('join');

// Pieces
Route::get('/wardrobe', 'PieceController@index');
