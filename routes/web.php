<?php

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
});

Route::get('/calisan', function () {
    return view('calisan');
});
Route::get('/kurum', function () {
    return view('kurum');
});
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});
Route::get('/ayarlar', function () {
    return view('ayarlar');
});
Route::get('/kantalebi', function () {
    return view('kantalebi');
});
Route::get('/kantalebilistesi', function () {
    return view('kantalebilistesi');
});
