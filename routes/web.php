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
Route::get('/calisan', 'EmployeeController@showPage')->name('employee');
Route::post('/addEmployee','EmployeeController@addEmployee');
Route::post('/updateEmployee','EmployeeController@updateEmployee');
Route::post('/deleteEmployee','EmployeeController@deleteEmployee');

Route::get('/hakkimizda', 'HomeController@hakkimizda');
Route::get('/ayarlar', 'HomeController@ayarlar');

//BLOOD REQUEST
Route::get('/kantalebi','BloodRequestController@kantalebi');
Route::get('/kantalebilistesi','BloodRequestController@kantalebilistesi');
Route::get('/kantalebi_incele/{id}','BloodRequestController@kantalebi_incele');
Route::post('/addBloodRequest','BloodRequestController@addBloodRequest');
Route::post('/deleteBloodRequest','BloodRequestController@deleteBloodRequest');
Route::post('/updateBloodRequest','BloodRequestController@updateBloodRequest');
Route::post('/makeInactiveBloodRequest','BloodRequestController@makeInactiveBloodRequest');
Route::post('/attendanceCompleted','BloodRequestController@attendanceCompleted');
Route::get('/getBloodRequests/{institution_id}','InstituionController@getBloodRequests');

//DONOR
Route::post('/addDonor','DonorController@addDonor')->name('addDonor');
Route::post('/loginDonor','DonorController@loginDonor')->name('loginDonor');

//ADRESS
Route::get('/getCities','AddressController@getCities');
Route::get('/getTowns/{city_id}','AddressController@getTowns');

//AUTHENTICATION
Auth::routes();
Route::get('/home', 'HomeController@index');

//FORM QUESTION
Route::get('/getQuestions','FormQuestionController@getQuestions');

//CHANGE USERTYPE
Route::get('/change_usertype', 'FunctionController@changeUserType');

//FUNCTIONS
Route::get('/getToken', 'FunctionController@getToken');
Route::get('/getSession', 'FunctionController@getSession');
Route::get('/flushSession', 'FunctionController@flushSession');
