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
Route::post('/addBloodRequest','BloodRequestController@addBloodRequest');
Route::post('/deleteBloodRequest','BloodRequestController@deleteBloodRequest');
Route::post('/updateBloodRequest','BloodRequestController@updateBloodRequest');
Route::post('/makeInactiveBloodRequest','BloodRequestController@makeInactiveBloodRequest');
Route::get('/getBloodRequests/{institution_id}','InstituionController@getBloodRequests');

//DONOR
Route::post('/addDonor','DonorController@addDonor')->name('addDonor');
Route::post('/loginDonor','DonorController@loginDonor')->name('loginDonor');
Route::post('/getDonorInfo','DonorController@getDonorInfo')->name('getDonorInfo');
Route::post('/updateDonor','DonorController@updateDonor')->name('updateDonor');

//ADRESS
Route::get('/getCities','AddressController@getCities');
Route::get('/getTowns/{city_id}','AddressController@getTowns');
Route::get('/getSpecificCity/{town_id}','AddressController@getSpecificCity');

//AUTHENTICATION
Auth::routes();
Route::get('/home', 'HomeController@index');

//FORM QUESTION
Route::get('/getQuestions','FormQuestionController@getQuestions');

//FORM QUESTION REPLY
Route::post('/addReplies','FormQuestionReplyController@addReplies')->name('addReplies');
Route::post('/updateReplies','FormQuestionReplyController@updateReplies')->name('updateReplies');
Route::post('/getFormRepliesOfUser','FormQuestionReplyController@getFormRepliesOfUser')->name('getFormRepliesOfUser');

//REJECTED DESCRIPTION
Route::get('/getRejectedDescriptions','RejectedDescriptionController@getRejectedDescriptions');

//REJECTED REQUEST
Route::post('/addRejectedRequest','RejectedRequestController@addRejectedRequest')->name('addRejectedRequest');
Route::post('/getRejectedRequests','RejectedRequestController@getRejectedRequests')->name('getRejectedRequests');

//ACCEPTED REQUEST
Route::post('/addAcceptedRequest','AcceptedRequestController@addAcceptedRequest')->name('addAcceptedRequest');
Route::post('/getAcceptedRequests','AcceptedRequestController@getAcceptedRequests')->name('getAcceptedRequests');

//CHANGE USERTYPE
Route::get('/change_usertype', 'FunctionController@changeUserType');


Route::get('/getToken', 'FunctionController@getToken');
