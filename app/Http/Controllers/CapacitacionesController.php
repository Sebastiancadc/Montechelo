<?php

namespace App\Http\Controllers;

use App\Capacitaciones;
use App\Events\CapacitacionesEvent;
use App\Http\Requests\CapacitacionesRequest;
use App\Pausasactivas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CapacitacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $capacitaciones = Capacitaciones::paginate(9);
        $pausasramdom = Pausasactivas::select('video')
        ->inRandomOrder() 
        ->first();
        return view('admin.capacitaciones.capacitaciones', compact('capacitaciones','pausasramdom'));
    }

    public function index2()
    {
        $capacitaciones = Capacitaciones::all();
        $capacitacionesRegistradas = DB::table('capacitaciones')->count();
        $diseño = DB::table('capacitaciones')->wherecategoria('diseño')->count();
        $desarrollo = DB::table('capacitaciones')->wherecategoria('desarrollo')->count();
        $software = DB::table('capacitaciones')->wherecategoria('software')->count();
        $analisis = DB::table('capacitaciones')->wherecategoria('analisis')->count();
        $produccion = DB::table('capacitaciones')->wherecategoria('produccion')->count();

        return view('admin/capacitaciones/index', compact('capacitaciones','capacitacionesRegistradas','diseño','desarrollo','software',
        'analisis','produccion'));



    }
    public function crearcapacitaciones()
    {
        return view('admin/capacitaciones/index');
    }

    public function store(CapacitacionesRequest $request)
    {
        $CapacitacionAgregar = new Capacitaciones;
        $CapacitacionAgregar->titulo = $request->titulo;
        $CapacitacionAgregar->fecha = new \Datetime($request->fecha);
        $CapacitacionAgregar->descripcion = $request->descripcion;
        $CapacitacionAgregar->categoria = $request->categoria;
        $CapacitacionAgregar->link = $request->link;
        $CapacitacionAgregar->user_id = $request->user_id;
        $CapacitacionAgregar->save();
        event(new CapacitacionesEvent($CapacitacionAgregar));
        if(app()->getLocale() == 'es'){
            return back()->with('agregar', 'La capacitacion a sido agregada correctamente');
           }else{
            return back()->with('agregar', 'Training has been added correctly');
        }
       
    }

    public function edit($id_capacitacion)
    {
        $capacitacionActualizar = Capacitaciones::findOrFail($id_capacitacion);
        return view('admin/capacitaciones/editarcapacitacion', compact('capacitacionActualizar'));
    }

    public function update(CapacitacionesRequest $request, $id)
    {
        $updateCapacitacion = Capacitaciones::findOrFail($id);
        $updateCapacitacion->titulo = $request->titulo;
        $updateCapacitacion->fecha = new \Datetime($request->fecha);
        $updateCapacitacion->descripcion = $request->descripcion;
        $updateCapacitacion->categoria = $request->categoria;
        $updateCapacitacion->user_id = $request->user_id;
        $updateCapacitacion->link = $request->link;
        
        $updateCapacitacion->save();
        if(app()->getLocale() == 'es'){
            return redirect('admin/capacitaciones')->with('update', 'La capacitacion a sido modificada correctamente');
           }else{
            return redirect('admin/capacitaciones')->with('update', 'The training has been modified correctly');
        }
        
    }

    public function destroy($id_capacitacion)
    {

        $eliminarCapacitacion = Capacitaciones::findOrFail($id_capacitacion);
        $eliminarCapacitacion->delete();
        if(app()->getLocale() == 'es'){
            return redirect('admin/capacitaciones')->with('eliminar', 'La capacitacion se elimino corectamente.');
           }else{
            return redirect('admin/capacitaciones')->with('eliminar', 'The training was eliminated correctly.');
        }
        
    }
}
