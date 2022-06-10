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

Route::get('/wikrama', function () {
    return view('sekolah.wikrama');
});

Route::get('/home', function () {
    return view('sekolah.home');
});

Route::get('/kantin ', function () {
    return view('sekolah.kantin');
});

Route::get('/perpustakaan', function () {
    return view('sekolah.perpustakaan');
});

Route::get('/peraturan', function () {
    return view('sekolah.peraturan');
});

Route::get('/matrikulasi', function () {
    return view('sekolah.matrikulasi');
});