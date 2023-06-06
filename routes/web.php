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
    return view('welcome');
});

Route::get('login', function () {
    return view('form.login');
});

Route::get('registrasi', function () {
    return view('form.registrasi');
});

Route::get('cari-sapi', function () {
    return view('cari-sapi');
});

Route::get('peternak', function () {
    return view('peternak.index');
});

Route::get('kelola-ternak', function () {
    return view('peternak.kelola-ternak');
});



Route::get('admin', function(){
    return view('admin.index');
});

Route::get('admin-kelola-peternak', function(){
    return view('admin.kelola-peternak');
});
