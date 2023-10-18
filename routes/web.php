<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index', function () {
    return view('index');
});
Route::get('topics-detail', function () {
    return view('topics-detail');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('topics-listing', function () {
    return view('topics-listing');
});
Route::get('register', function () {
    return view('register');
});
