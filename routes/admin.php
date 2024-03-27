<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.pages.index.index');
    })->name('dashboard');

    Route::prefix('category')->group(function () {

        Route::get('', function () {
            return view('Admin.pages.category.index');
        })->name('categoriesIndex');
        Route::get('create', function () {
            return view('Admin.pages.category.create');
        })->name('categoriesCreate');
        // Route::get('', function () {
        //     return view('Admin.pages.category.update');
        // });
    });
});
