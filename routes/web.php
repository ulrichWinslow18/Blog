<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;

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

Route::get('/local', [articleController::class, 'index'])->name('local');

Route::get('/contact', function () {
    return view('contact');     
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
