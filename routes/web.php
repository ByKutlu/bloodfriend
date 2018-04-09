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
Route::get('/kurum', 'InstitutionController@showPage')->name('instution');
Route::post('/addInstitution','InstitutionController@addInstitution');
Route::post('/updateInstitution','InstitutionController@updateInstitution');
Route::post('/deleteInstitution','InstitutionController@deleteInstitution');

//Çalışan FONKSIYONLARI
Route::get('/calisan', 'EmployeeController@showPage');
Route::post('/addEmployee','EmployeeController@addEmployee');

Route::get('/hakkimizda', 'HomeController@hakkimizda');
Route::get('/ayarlar', 'HomeController@ayarlar');

//BLOOD REQUEST
Route::get('/kantalebi','BloodRequestController@kantalebi');
Route::get('/kantalebilistesi','BloodRequestController@kantalebilistesi');
Route::post('/addBloodRequest','BloodRequestController@addBloodRequest');

//ADRESS
Route::get('/getCities','AddressController@getCities');
Route::get('/getTowns/{city_id}','AddressController@getTowns');

//AUTHENTICATION
Auth::routes();
Route::get('/home', 'HomeController@index');

//CHANGE USERTYPE
Route::get('/change_usertype', 'FunctionController@changeUserType');
