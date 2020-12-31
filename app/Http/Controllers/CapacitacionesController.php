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
        $capacitacionesRegistradas = DB::table('Capacitaciones')->count();
        $diseño = DB::table('Capacitaciones')->wherecategoria('diseño')->count();
        $desarrollo = DB::table('Capacitaciones')->wherecategoria('desarrollo')->count();
        $software = DB::table('Capacitaciones')->wherecategoria('software')->count();
        $analisis = DB::table('Capacitaciones')->wherecategoria('analisis')->count();
        $produccion = DB::table('Capacitaciones')->wherecategoria('produccion')->count();

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
        return back()->with('agregar', 'la capacitacion a sido agregada correctamente');
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
        return redirect('admin/capacitaciones')->with('update', 'la capacitacion a sido modificada correctamente');
    }

    public function destroy($id_capacitacion)
    {

        $eliminarCapacitacion = Capacitaciones::findOrFail($id_capacitacion);
        $eliminarCapacitacion->delete();
        return redirect('admin/capacitaciones')->with('eliminar', 'la capacitacion se elimino corectamente ');
    }
}
