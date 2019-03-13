<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/join', function () {
    return view('landing');
})->name('join');

// Pieces
Route::get('/wardrobe', 'PieceController@index');
