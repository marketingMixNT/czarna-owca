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
    Route::view('/rodzinny-deluxe', 'pages.apartments.apartment-1')->name('apartment-1');
    Route::view('/rodzinny-premiere', 'pages.apartments.apartment-2')->name('apartment-2');
    Route::view('/dwuosobowy-deluxe', 'pages.apartments.apartment-3')->name('apartment-3');
    
});

Route::view('/atrakcje','pages.attractions')->name('attractions');

Route::view('/galeria','pages.gallery')->name('gallery');

Route::view('/kontakt','pages.contact.index')->name('contact');
