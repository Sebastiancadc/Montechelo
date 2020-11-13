<?php

namespace App\Http\Controllers;

use App\Capacitaciones;
use Illuminate\Http\Request;


class CapacitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $capacitaciones = Capacitaciones::paginate(9);
        return view('admin/capacitaciones', compact('capacitaciones'));
    }


  /*   public function index2()
    {
        return view('admin/capacitaciones/index');
    } */
    public function index2()
    {

        $capacitaciones = Capacitaciones::paginate(9);
        return view('admin/capacitaciones/index', compact('capacitaciones'));
    }

    public function crearcapacitaciones()
    {
        return view('admin/capacitaciones/index');
    }

    public function store(Request $request)
    {
        $CapacitacionAgregar = new Capacitaciones;
        $CapacitacionAgregar->id_capacitacion = $request->id_capacitacion;
        $CapacitacionAgregar->fecha =new \Datetime($request->fecha);
        $CapacitacionAgregar->descripcion = $request->descripcion;
        $CapacitacionAgregar->categoria = $request->categoria;
        $CapacitacionAgregar->link = $request->link;
        $CapacitacionAgregar->save();
        return back()->with('agregar', 'la capacitacion a sido agregada correctamente');

    }

    public function edit($id_capacitacion)
    {
        $capacitacionActualizar =Capacitaciones::findOrFail($id_capacitacion);
        return view('admin/capacitaciones/editarcapacitacion',compact('capacitacionActualizar'));
    }





    public function update(Request $request, $id)
    {
        $updateCapacitacion = Capacitaciones::findOrFail($id);
        $updateCapacitacion->titulo = $request->titulo;
        $updateCapacitacion->fecha =new \Datetime($request->fecha);
        $updateCapacitacion->descripcion = $request->descripcion;
        $updateCapacitacion->categoria = $request->categoria;
        $updateCapacitacion->link = $request->link;
        $updateCapacitacion->save();
        return back()->with('update', 'la capacitacion a sido modificada correctamente');
    }

    public function destroy($id_capacitacion)
    {

      /*   $eliminarCapacitacion = Capacitaciones::findOrFail($id);
        $eliminarCapacitacion->delete();
        return back()->with('eliminar', 'la capacitacion a sido eliminada correctamente'); */

        $eliminarCapacitacion = Capacitaciones::findOrFail($id_capacitacion);
        $eliminarCapacitacion->delete();
        return redirect('admin/capacitaciones')->with('eliminar','la capacitacion se elimino corectamente ');

    }

}
