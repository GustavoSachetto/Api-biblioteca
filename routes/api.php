<?php

use Illuminate\Support\Facades\Route;

Route::prefix('categories')->name('categories')->group(base_path('routes/api/v1/categories.php'));