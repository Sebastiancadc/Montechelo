<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::get('/', 'InicioController@index');

Route::get('/home', 'InicioController@index2');

Route::get('/home', 'InicioController@index2')->middleware('verified');

Auth::routes();


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


Route::get('admin/calendario', function () {
    return view('admin/calendario');
});


Route::get('admin/repositorio', function () {

    return view('admin.repositorio');
});


Route::get('admin/buzonagregar', function () {

    return view('admin.buzon');
});

Route::get('admin/calen', function () {

    return view('admin.calen');
});


Route::get('evento', function () {
    return view('admin.calendario.eve');
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
Route::delete('deletenovedad/{id}', 'NovedadController@destroy')->name('eliminarnovedad');


//Solicitud
Route::resource('admin/solicitud','SolicitudController');
Route::get('crearsolicitud', 'SolicitudController@crearsolicitud')->name('crear');
Route::post('crearsolicitudes', 'SolicitudController@crearsolicitudes')->name('crearsolicitudes');
Route::get('editarsolicitud/{id}', 'SolicitudController@edit')->name('editar');
Route::put('updatesolicitud/{id}', 'SolicitudController@update')->name('update');
Route::delete('deletesolicitud/{id}', 'SolicitudController@destroy')->name('eliminar');

//buzon
Route::resource('admin/buzon', 'BuzonDeSugerenciasController');
Route::get('crearbuzon', 'BuzonDeSugerenciasController@crearbuzon')->name('crearbuzon');
Route::get('buzonusu', 'BuzonDeSugerenciasController@index2')->name('index2');
Route::post('crearsugerencias', 'BuzonDeSugerenciasController@crearsugerencias')->name('crearsugerencias');
Route::delete('deletesugerencia/{id}', 'BuzonDeSugerenciasController@destroy')->name('eliminarsugerencia');
/* Route::get('/editar/{id}', 'BuzonDeSugerenciasController@edit')->name('editar');
Route::put('/update/{id}', 'BuzonDeSugerenciasController@update')->name('update'); */


//CalendarioFull
// Route::get('calendario', 'CalendarioController@index');
// Route::get('calendario/eventos', 'CalendarioController@lsitar');

//Canlendario
Route::get('admin/eventos','CalendarioController@eventos');
Route::get('calendar', 'CalendarioController@index')->name('calendar');
Route::get('cumpleaños', 'CalendarioController@cumpleAños')->name('cumpleaños');
Route::resource('events', 'EventsController');  
Route::post('Calendario/crearEvento', 'CalendarioController@crearevento')->name('crearEvento');
Route::get('Calendario/verEvento/{id}', 'CalendarioController@verevento')->name('verEvento');
Route::get('Calendario/verEventos/{id}', 'CalendarioController@verEventos')->name('verEventos');
Route::put('Calendario/editarEvento/{id}', 'CalendarioController@editarEvento')->name('editarEvento');
Route::delete('Calendario/eliminarEvento/{id}', 'CalendarioController@destroy')->name('eliminarEventos');

