<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/variantes/create', 'VariantesController@create')->name('variantes.create');

Route::post('/variantes', 'VariantesController@store')->name('variantes.store');

