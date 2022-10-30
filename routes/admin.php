<?php
Auth::routes();
Route::group(['prefix'  =>  'admin'], function () {

Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    // settings routes
    Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
    Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

    // doctors routes
    Route::group(['prefix' => 'doctors'], function () {
 
        Route::get('/', 'Admin\DoctorController@index')->name('admin.doctors.index');
        Route::get('/create', 'Admin\DoctorController@create')->name('admin.doctors.create');
        Route::get('/{id}/show', 'Admin\DoctorController@show')->name('admin.doctors.show');
        Route::post('/store', 'Admin\DoctorController@store')->name('admin.doctors.store');
        Route::get('/edit/{id}', 'Admin\DoctorController@edit')->name('admin.doctors.edit');
        Route::post('/{id}/update', 'Admin\DoctorController@update')->name('admin.doctors.update');
        Route::get('/{id}/delete', 'Admin\DoctorController@delete')->name('admin.doctors.delete');
        Route::get('/{id}/mail', 'Admin\DoctorController@mail')->name('admin.doctors.mail');
        Route::post('/{id}/mail/submit', 'Admin\DoctorController@SubmitMail')->name('admin.doctors.sendmail');
        Route::get('/status/update', 'Admin\DoctorController@updateStatus')->name('admin.doctors.update.status');
     });

     // appointment routes
     Route::group(['prefix' => 'appointments'], function () {
        Route::get('/', 'Admin\AppointmentController@index')->name('admin.appointments.index');
        Route::get('/{appointment}/show', 'Admin\AppointmentController@show')->name('admin.appointments.show');
        Route::get('/{id}/delete', 'Admin\AppointmentController@delete')->name('admin.appointments.delete');
        Route::get('/update/{id}/status/{value}', 'Admin\AppointmentController@update')->name('admin.appointments.update');
        Route::get('/create', 'Admin\AppointmentController@create')->name('admin.appointments.create');
     });

     // user routes
     Route::group(['prefix' => 'users'], function () {
 
        Route::get('/', 'Admin\UserController@index')->name('admin.users.index');
        Route::get('/create', 'Admin\UserController@create')->name('admin.users.create');
        Route::get('/{id}/show', 'Admin\UserController@show')->name('admin.users.show');
        Route::post('/store', 'Admin\UserController@store')->name('admin.users.store');
        Route::get('/edit/{id}', 'Admin\UserController@edit')->name('admin.users.edit');
        Route::post('/{id}/update', 'Admin\UserController@update')->name('admin.users.update');
        Route::get('/{id}/delete', 'Admin\UserController@delete')->name('admin.users.delete');
        Route::get('/{id}/mail', 'Admin\UserController@mail')->name('admin.users.mail');
        Route::post('/{id}/mail/submit', 'Admin\UserController@SubmitMail')->name('admin.users.sendmail');
        Route::get('/status/update', 'Admin\UserController@updateStatus')->name('admin.users.update.status');
     });
});

});