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

Route::get('admin/calendario/calendario', function () {
    return view('admin/calendario/calendario');
});

Route::get('admin/repositorio', function () {

    return view('admin.repositorio');
});
Route::get('admin/buzonagregar', function () {

    return view('admin.crearbuzon');
});

//Usuario
Route::group(['prefix' => 'admin','middleware' =>'admin'], function() {
Route::resource('usuario', 'HomeController');
Route::post('usuario/createadmin','HomeController@storeAdmin');
Route::get('crearUserAdmin', 'HomeController@crearAdmin');
Route::get('editarusuario/{id}', 'HomeController@edit')->name('editarusuario');
Route::put('updateusuario/{id}', 'HomeController@update')->name('updateusuario');
Route::delete('deleteusuario/{id}', 'HomeController@destroy')->name('eliminarusuario');
});

//Novedad
Route::resource('admin/novedad','NovedadController');
Route::get('crearnovedad', 'NovedadController@crearnovedad')->name('crear');
Route::post('crearnovedades', 'NovedadController@crearnovedades')->name('crearnovedades');
Route::get('editarnovedad/{id}', 'NovedadController@edit')->name('editarnovedad');
Route::put('updatenovedad/{id}', 'NovedadController@update')->name('update');
Route::delete('deletenovedad/{id}', 'NovedadController@destroy')->name('eliminar');


//Evento
Route::get('calendario/form','ControllerEvent@form');
Route::post('calendario/create','ControllerEvent@create');

//Calendario
Route::resource('admin/evento','ControllerEvent');
Route::get('admin/eventos','ControllerEvent@eventos');
Route::get('Evento/details/{id}','ControllerEvent@details')->name('editarevento');
Route::put('updateevento/{id}', 'ControllerEvent@update')->name('updateevent');
Route::get('Evento/index','ControllerEvent@index');
Route::get('Evento/index/{month}','ControllerEvent@index_month');    
Route::delete('deleteevento/{id}', 'ControllerEvent@destroy')->name('eliminarevento');

//Solicitud
Route::resource('admin/solicitud','SolicitudController');
Route::get('crearsolicitud', 'SolicitudController@crearsolicitud')->name('crear');
Route::post('crearsolicitudes', 'SolicitudController@crearsolicitudes')->name('crearsolicitudes');
Route::get('editarsolicitud/{id}', 'SolicitudController@edit')->name('editar');
Route::put('updatesolicitud/{id}', 'SolicitudController@update')->name('update');
Route::delete('deletesolicitud/{id}', 'SolicitudController@destroy')->name('eliminar');