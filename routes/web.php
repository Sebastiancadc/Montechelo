<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::get('/', 'InicioController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
//dasboard 

Route::get('home', function () {

    return view('admin.dashboard');
});
// login
Route::get('admin', function () {

    return view('admin.login');
});
// recuperar cotraseña
Route::get('admin/pasword', function () {

    return view('admin.pasword');
});


Route::get('admin/buzon', function () {

    return view('admin.buzon');
});

Route::get('admin/planestrategico', function () {

    return view('admin.plan');
});

Route::get('admin/solicitud', function () {

    return view('admin.solicitud');
});

Route::get('admin/directorio', function () {

    return view('admin.directorio');
});

Route::get('admin/calendario', function () {

    return view('admin.calendario');
});
Route::get('admin/repositorio', function () {

    return view('admin.repositorio');
});



Route::resource('admin/usuario', 'HomeController');


Route::resource('admin/novedad','NovedadController');

    // Route::post('admin/novedad','NovedadController@store')->name('admin.novedad');
    // Route::delete('admin/novedad','NovedadController@destroy')->name('admin.novedad');