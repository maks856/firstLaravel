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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}',
    'App\Http\Controllers\ContactController@detailsComment'
)->name('contact-data-one');

Route::get('/contact/all',
    'App\Http\Controllers\ContactController@allData'
)->name('contact-data');

Route::post('/contact/submit',
    'App\Http\Controllers\ContactController@submit'
)->name('contact-form');
