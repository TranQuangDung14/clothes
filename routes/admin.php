<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/master', function () {
        return view('Admin.pages.index.index');
    });
});
