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
    return view('website.home');
})->name('website.home');

Route::get('/about_us', function () {
    return view('website.about_us');
})->name('website.aboutUs');

Route::namespace('Website')->group(function () {
    Route::get('/contact_us', 'ContactController@index')->name('website.contactUs');
    Route::post('/contact_us', 'ContactController@saveContact')->name('website.contactUs');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
