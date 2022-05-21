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

 use App\Http\Controllers\BisController;
 Route::get('/tampilTerminal', [BisController::class, 'tampilTerminal']);

 use App\Http\Controllers\ProjekController;
 Route::get('/tampil', [ProjekController::class, 'tampil']);

 Route::get('/layout', function () {
    return view('layout');
});

Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak');

Route::get('/home', function () {
    return view('home.index');
})->name('home');
Route::get('/daftar', function () {
    return view('daftar.index');
})->name('daftar');

Route::get('/testimoni', function () {
    return view('testimoni.index');
})->name('testimoni');
