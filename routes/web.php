<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect('/home');
});

// Pieces
Route::get('/wardrobe', 'PieceController@index');