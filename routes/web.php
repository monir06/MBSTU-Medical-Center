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
Auth::routes();
Route::view('/', 'site.pages.homepage');
require 'admin.php';

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');

Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

// Frontend Appointment Routes for user appointment request
Route::group(['middleware' => ['auth']], function () {
    Route::get('/request', 'Site\AppointmentRequestController@getAppointment')->name('request.index');
    Route::post('/request/appointment', 'Site\AppointmentRequestController@placeRequest')->name('appointment.place.request');
    Route::get('/request/appointment/list', 'Site\AppointmentRequestController@getAppointmentList')->name('appointment.list.index');
});