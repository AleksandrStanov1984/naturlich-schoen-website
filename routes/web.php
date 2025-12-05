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

Route::get('/', function () {
    return view('home');
});

Route::get('/impressum', function () {
    return view('legal.impressum');
})->name('impressum');

Route::get('/datenschutz', function () {
    return view('legal.datenschutz');
})->name('datenschutz');

