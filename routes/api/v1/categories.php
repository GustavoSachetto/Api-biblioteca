<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::controller(CategoryController::class)->group(function() {
    Route::get('/', 'index')->name('.index');
    Route::get('/{id}', 'show')->name('.show');
    Route::post('/', 'store')->name('.store');
    Route::put('/{id}', 'update')->name('.update');
});