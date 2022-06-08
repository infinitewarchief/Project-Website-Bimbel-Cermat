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
    return view('welcome');
});


Route::get('/daftar',[App\Http\Controllers\DaftarController::class, 'daftarView'] )->name('daftarView');
Route::post('daftar', [App\Http\Controllers\DaftarController::class, 'daftar'])->name('daftar');
Route::get('/login', [App\Http\Controllers\DaftarController::class, 'loginView'])->name('loginView');
Route::post('/login', [App\Http\Controllers\DaftarController::class, 'login'])->name('login');



Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak');


Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/testimoni', function () {
    return view('testimoni.index');
})->name('testimoni');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
