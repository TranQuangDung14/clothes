<?php

use Illuminate\Support\Facades\Route;
include __DIR__.'/admin.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('User.layouts.master');
});
Route::get('home', function () {
    return view('User.pages.index.index');
});
Route::get('shop', function () {
    return view('User.pages.shop.shop');
});
Route::get('cart', function () {
    return view('User.pages.cart.cart');
});
Route::get('blog', function () {
    return view('User.pages.blog.blog');
});
Route::get('about', function () {
    return view('User.pages.about.about');
});
Route::get('contact', function () {
    return view('User.pages.contact.contact');
});
