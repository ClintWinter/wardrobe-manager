<?php

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('landing');
})->name('join');

// Garments
Route::get('/garments', 'GarmentController@index');
Route::get('/garments/create', 'GarmentController@create');
Route::post('/garments', 'GarmentController@store');
Route::get('/garments/{garment}', 'GarmentController@show');
Route::get('/garments/{garment}/edit', 'GarmentController@edit');
Route::patch('/garments/{garment}', 'GarmentController@update');
Route::delete('/garments', 'GarmentController@destroy');

// Outfits
Route::get('/outfits', 'OutfitController@index');
Route::get('/outfits/create', 'OutfitController@create');
Route::post('/outfits', 'OutfitController@store');
Route::get('/outfits/{outfit}', 'OutfitController@show');
Route::get('/outfits/{outfit}/edit', 'OutfitController@edit');
Route::patch('/outfits{outfit}', 'OutfitController@update');
Route::delete('/outfits', 'OutfitController@destroy');
