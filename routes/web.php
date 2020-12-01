<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::get('/', function () {

    return view('admin.login');
});

Route::get('/home', 'InicioController@index');

// Route::get('/home', 'InicioController@index')->middleware('verified');

Auth::routes();


//dasboard


// login
Route::get('admin', function () {

    return view('admin.login');
});
// recuperar cotraseña
Route::get('admin/pasword', function () {

    return view('admin.pasword');
});

Route::get('planestrategico', function () {

    return view('admin.plan');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('categoria', 'CategoryController');
    Route::resource('noticia', 'NoticiasController');
});


// <<<<<<<<<<<<<<-------------------------------ADMINISTRADOR------------------->>>>>>>>>>
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::resource('usuario', 'HomeController');
    Route::post('createadmin', 'HomeController@storeAdmin')->name('crearAdmin');
    Route::get('crearUserAdmin', 'HomeController@crearAdmin');
    Route::get('editarusuario/{id}', 'HomeController@edit')->name('editarusuario');
    Route::put('updateusuario/{id}', 'HomeController@update')->name('updateusuario');
    Route::delete('deleteusuario/{id}', 'HomeController@destroy')->name('eliminarusuario');
    
    //DASBOARD ADMIN
    Route::get('HomeAdmin', 'InicioController@indexAdmin');
    //Novedad
    Route::resource('novedad', 'NovedadController');
    Route::get('editarnovedad/{id}', 'NovedadController@edit')->name('editarnovedad');
    Route::put('updatenovedad/{id}', 'NovedadController@update')->name('update');
    Route::delete('deletenovedad/{id}', 'NovedadController@destroy')->name('eliminarnovedad');

    //Solicitud
    Route::resource('solicitud', 'SolicitudController');
    Route::get('editarsolicitud/{id}', 'SolicitudController@edit')->name('editarsoli');
    Route::put('updatesolicitud/{id}', 'SolicitudController@update')->name('update');
    Route::delete('deletesolicitud/{id}', 'SolicitudController@destroy')->name('eliminar');
    Route::get('/solicitudes/pdf', [SolicitudController::class, 'createPDF']);
    Route::get('/nomina/pdf', [SolicitudController::class, 'storagePDF']);

    //buzon
    Route::resource('buzon', 'BuzonDeSugerenciasController');
    Route::delete('deletesugerencia/{Id_sugerencia}', 'BuzonDeSugerenciasController@destroy')->name('eliminarsugerencia');

    //Canlendario
    Route::get('eventos', 'CalendarioController@eventos');

    //repositorio
    Route::resource('repositorio', 'RepositorioController');

    Route::post('/subir', 'Controller@subirArchivo')->name('subir');

    //Noticias
    Route::resource('noticia', 'NoticiasController');
    Route::get('editarnoticia/{id}', 'NoticiasController@edit')->name('editarnoticia');
    Route::put('updatenoticia/{id}', 'NoticiasController@update')->name('update');
    Route::delete('deletenoticia/{id}', 'NoticiasController@destroy')->name('eliminarnoticia');

    //Categorias
    Route::resource('categoria', 'CategoryController');
    Route::get('crearcategoria', 'CategoryController@crearbuzon')->name('crearcategoria');
    Route::post('crearcategorias', 'CategoryController@crearsugerencias')->name('crearcategorias');
    Route::get('editarcategoria/{id}', 'CategoryController@edit')->name('editar');
    Route::delete('deletecategoria/{id}', 'CategoryController@destroy')->name('eliminarcategoria');

    //Capacitaciones
    Route::resource('capacitaciones', 'CapacitacionesController');
    Route::get('capacitaciones', 'CapacitacionesController@index2');
    Route::post('/store', 'CapacitacionesController@store')->name('store');
    Route::get('admin/editarcapacitacion/{id_capacitacion}', 'CapacitacionesController@edit')->name('editarcapacitacion');
    Route::put('/update/{id_capacitacion}', 'CapacitacionesController@update')->name('update');
    Route::delete('deletecapacitacion/{id_capacitacion}', 'CapacitacionesController@destroy')->name('eliminarcapacitacion');
});


//repositorio

Route::get('crearrepositorio', 'RepositorioController@crearrepositorio')->name('crearrepositorio');
Route::post('crearrepositorios', 'RepositorioController@store')->name('crearrepositorios');
Route::get('editrepositorio/{id}', 'RepositorioController@editrepositorio')->name('editrepositorio');
Route::put('updaterepositorio/{id}', 'RepositorioController@update')->name('updaterepositorio');
Route::delete('deleterepositorio/{id}', 'RepositorioController@destroy')->name('eliminarrepositorio');
Route::resource('repositorio', 'RepositorioController');
Route::post('/subir', 'Controller@subirArchivo')->name('subir');


Route::get('repositoriocola', function () {

    return view('admin.repositoriocola');
});

// <<<<<<<<<<<-------------------------------COLABORADOR------------------->>>>>>>
Route::group(['prefix' => ''], function () {
    //Usuario
    Route::resource('perfil', 'PerfilController');
    Route::get('editarperfil/{id}', 'PerfilController@editarperfil')->name('editarperfil');
    Route::put('editarprofile/{id}', 'PerfilController@updateProfile')->name('editarprofile');

    //Directorio
    Route::resource('directorio', 'DirectorioController');

    Route::get('buscador', 'DirectorioController@buscador')->name('buscar');
    Route::get('verperfil/{id}', 'DirectorioController@perfilUsuarios')->name('verperfil');

    //Noticias
    Route::get('noticiausu', 'NoticiasController@index2')->name('index2');
    Route::post('crearnoticias', 'NoticiasController@store')->name('crearnoticias');
    Route::get('crearnoticia', 'NoticiasController@crearnoticia')->name('crearnoticia');
    Route::get('post/{slug}', 'NoticiasController@post')->name('post');

    //Canlendario
    Route::get('calendar', 'CalendarioController@index')->name('calendar');
    Route::post('Calendario/crearEvento', 'CalendarioController@crearevento')->name('crearEvento');
    Route::get('cumpleaños', 'CalendarioController@cumpleAños')->name('cumpleaños');
    Route::get('Calendario/verEventos/{id}', 'CalendarioController@verEventos')->name('verEventos');
    Route::get('Calendario/verEvento/{id}', 'CalendarioController@verevento')->name('verEvento');
    Route::delete('Calendario/eliminarEvento/{id}', 'CalendarioController@destroy')->name('eliminarEventos');
    Route::put('Calendario/editarEvento/{id}', 'CalendarioController@editarEvento')->name('editarEvento');

    //Solicitud
    Route::resource('solicitud', 'SolicitudController');
    Route::get('solicitudesd', 'SolicitudController@soli');
    Route::get('crearsolicitud', 'SolicitudController@crearsolicitud')->name('crear');
    Route::post('crearsolicitudes', 'SolicitudController@crearsolicitudes')->name('crearsolicitudes');
    Route::get('solicitudespdf','SolicitudController@createPDF');
    Route::get('nominapdf', 'SolicitudController@storagePDF');

    //Buzon
    Route::resource('buzon', 'BuzonDeSugerenciasController');
    Route::get('crearbuzon', 'BuzonDeSugerenciasController@crearbuzon')->name('crearbuzon');
    Route::get('buzonusu', 'BuzonDeSugerenciasController@index2')->name('index2');
    Route::post('crearsugerencias', 'BuzonDeSugerenciasController@crearsugerencias')->name('crearsugerencias');

    //Novedad
    Route::get('crearnovedad', 'NovedadController@crearnovedad')->name('crear');
    Route::post('crearnovedades', 'NovedadController@crearnovedades')->name('crearnovedades');

    //capacitaciones
    Route::resource('capacitaciones', 'CapacitacionesController');
    //Route::get('crearbuzon', 'BuzonDeSugerenciasController@crearbuzon')->name('crearbuzon');


    //Imagen de perfil
    Route::post('foto', 'PerfilController@updatePhoto');
    Route::post('fotoportada', 'PerfilController@updatePhotoportada');

    //pausas activas
    Route::resource('pausasactivas', 'PausasActivasController');
});

//Talento Humano
Route::get('talento', 'NoticiasController@talento')->name('talento');
