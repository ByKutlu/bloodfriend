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


Route::get('/', 'HomeController@index')->name('home');


//KURUM FONKSIYONLARI
Route::get('/kurum', 'InstitutionController@showPage');
Route::post('/addInstitution','InstitutionController@addInstitution');

//Çalışan FONKSIYONLARI
Route::get('/calisan', 'EmployeeController@showPage');
Route::post('/addEmployee','EmployeeController@aaddEmployee');

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

/*Route::get('/login', function () {
    return view('login');
});*/


Route::get('/getCities','AddressController@getCities');
Route::get('/getTowns/{city_id}','AddressController@getTowns');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
