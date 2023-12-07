<?php

use Illuminate\Support\Facades\Route;

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




Route::view('/','pages.home.index')->name('home');
Route::view('/o-nas','pages.about')->name('about');

Route::view('/pokoje', 'pages.apartments')->name('apartments');

Route::prefix('/pokoje')->group(function () {
    Route::view('/pokój-1', 'pages.apartments.apartment-1')->name('apartment-1');
    Route::view('/pokój-2', 'pages.apartments.apartment-1')->name('apartment-2');
    Route::view('/pokój-3', 'pages.apartments.apartment-1')->name('apartment-3');
    Route::view('/pokój-4', 'pages.apartments.apartment-1')->name('apartment-4');
    Route::view('/pokój-5', 'pages.apartments.apartment-1')->name('apartment-5');
});

Route::view('/atrakcje','pages.attractions')->name('attractions');

Route::view('/galeria','pages.gallery')->name('gallery');

Route::view('/kontakt','pages.contact.index')->name('contact');
