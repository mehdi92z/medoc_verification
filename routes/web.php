<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dash', function () {
    return view('admin.dash');
});

//////////patients

Route::get('/patients/', 'PatientController@index')->name('patients.index');
Route::get('/patients/create', 'PatientController@create')->name('patients.create');
Route::post('/patients/store', 'PatientController@store')->name('patients.store');
Route::get('/patients/profil/{id}', 'PatientController@show')->name('patients.show');
Route::put('/patients/profil/{id}', 'PatientController@update')->name('patients.update');

Route::get('/patients/getpatients', 'PatientController@getPatients')->name('patients.api');
