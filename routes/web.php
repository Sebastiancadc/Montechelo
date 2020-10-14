<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);


Route::get('/', function () {
    return view('welcome');
});

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

// crud usuario
Route::get('admin/usuario', 'HomeController@user')->name('admin.user');
Route::post('admin/create', 'HomeController@create')->name('admin.create');
Route::put('admin/{user}/update', 'HomeController@update')->name('admin.update');
Route::delete('admin/{user}/delete', 'HomeController@delete')->name('admin.delete');



Route::resource('contacts', 'HomeController');


//cerrar sesion
Route::get('logout', 'HomeControlle@logout')->name('logout');

// Route::post('login', 'Auth\LoginController@login')->name('login');


//crud novedad
Route::get('admin/novedad', 'NovedadController@index')->name('admin.novedad');
Route::get('admin/crearnovedad', 'NovedadController@crear')->name('admin.create.novedad');
Route::post('admin/novedad', 'NovedadController@create')->name('admin.create.novedad');
Route::put('admin/{novedad}/update', 'NovedadController@update')->name('admin.update.novedad'); 
Route::delete('admin/{novedad}/delete', 'NovedadController@delete')->name('admin.delete.novedad'); 