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
    return view('welcome');
});
/*Route::resource('/doctor','doctorController');*/

Route::get('/doctor','DoctorController@create')->name('create.doctor');
Route::get('/doctor/success','DoctorController@index')->name('doctor.index');
Route::post('/doctor/store','DoctorController@store')->name('doctorstore');

Route::get('/patient','PatientController@create')->name('create.patient');
Route::get('/patient/success','PatientController@index')->name('patient.index');
Route::post('/patient/store','PatientController@store')->name('patientstore');