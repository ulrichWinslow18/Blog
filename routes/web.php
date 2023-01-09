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
    return view('index');     
})->name('accueil');

Route::get('/tutoriels', function () {
    return view('tutoriels');     
})->name('tuto');

Route::get('/local', function () {
    return view('local');     
})->name('local');

Route::get('/contact', function () {
    return view('contact');     
})->name('contact');