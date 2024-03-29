<?php

namespace App\Http\Controllers;

use App\Http\Requests\NovedadRequest;
use Illuminate\Http\Request;
use App\Novedad;
use App\Pausasactivas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NovedadController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $novedad = Novedad::paginate(9);
        $novedades = DB::table('novedad')->count();
        $desarollo = DB::table('novedad')->wherearea('Desarrollo')->count();
        $talentohumano = DB::table('novedad')->wherearea('talento humano')->count();
        $recursoshumanos = DB::table('novedad')->wherearea('recursos humanos')->count();
        $produccion = DB::table('novedad')->wherearea('produccion')->count();
        $pendientes = DB::table('novedad')->whereestado('pendiente')->count();
        $revisado = DB::table('novedad')->whereestado('revisado')->count();
        return view('admin.novedad.novedad', compact('novedad','novedades','pendientes','revisado','desarollo'
        ,'talentohumano','recursoshumanos','produccion'));
    }

    public function store(NovedadRequest $request)
    {
        Novedad::create($request->all());
        if(app()->getLocale() == 'es'){
            return redirect()->action('NovedadController@index')->with('crearnovedades','Novedad registrada correctamente');
           }else{
            return redirect()->action('NovedadController@index')->with('crearnovedades','Novelty correctly registered');
           }
        
    }


    public function crearnovedad()
    {
        $pausasramdom = Pausasactivas::select('video')
        ->inRandomOrder() 
        ->first();
        return view('admin.novedad.crearnovedad', compact('pausasramdom'));
    }

    public function crearnovedades(NovedadRequest $request)
    {

        $novedad = new Novedad();
        $novedad->area = $request->area;
        $novedad->fecha = new \Datetime($request->fecha);
        $novedad->novedad = $request->novedad;
        $novedad->descripcion = $request->descripcion;
        $novedad->estado = $request->estado;
        $novedad->save();
        if(app()->getLocale() == 'es'){
            return back()->with('crearnovedad','Novedad registrada correctamente');
           }else{
            return back()->with('crearnovedad','Novelty correctly registered'); 
        }
        
    }


    public function edit($id)
    {
        $novedadActualizar = Novedad::findOrFail($id);
        return view('admin/novedad/editarnovedad',compact('novedadActualizar'));
    }

    public function update(Request $request, $id)
    {
        $novedadAUpdate = Novedad::findOrFail($id);
        $novedadAUpdate->estado = $request->estado;
        $novedadAUpdate->save();

        if(app()->getLocale() == 'es'){
            return redirect()->action('NovedadController@index')->with('update', 'El estado de la novedad se actualizo correctamente');
           }else{
            return redirect()->action('NovedadController@index')->with('update', 'The novelty status has been updated correctly.');
        }
        
    }


    public function destroy($id)
    {
        $data = Novedad::findOrFail($id);
        $data->delete();
        if(app()->getLocale() == 'es'){
            return redirect('admin/novedad')->with('eliminar','La novedad se elimino correctamente');
           }else{
            return redirect('admin/novedad')->with('eliminar','The novelty was successfully removed');
        }
        
        
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}
