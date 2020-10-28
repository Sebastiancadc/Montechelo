<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedad;
use Illuminate\Support\Facades\Auth;


class NovedadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $novedad = Novedad::paginate(9);
        return view('admin.novedad', compact('novedad'));
    }

    public function store(Request $request)
    {
        Novedad::create($request->all());
        return redirect('admin/novedad');
    }


    public function crearnovedad()
    {
        return view('admin/crearnovedad');
    }

    public function crearnovedades(Request $request)
    {

        $novedad = new Novedad();
        $novedad->area = $request->area;
        $novedad->fecha = new \Datetime($request->fecha);
        $novedad->novedad = $request->novedad;
        $novedad->descripcion = $request->descripcion;
        $novedad->estado = $request->estado;
        $novedad->save();
        return back()->with('crearnovedad','Novedad registrada correctamente');
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
        return redirect()->action('NovedadController@index')->with('update', 'El estado de la novedad se actualizo correctamente');
    }


    public function destroy($id)
    {
        $data = Novedad::findOrFail($id);
        $data->delete();
        return redirect('admin/novedad')->with('eliminar','la novedad se elimino');
        
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}
