<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about_us', function () {
    return view('about-us');
});
Route::get('our_service', function () {
    return view('service-us');
});
Route::get('book_now', function () {
    return view('book');
});
Route::get('contact_us', function () {
    return view('contact-us');
});

Auth::routes();

