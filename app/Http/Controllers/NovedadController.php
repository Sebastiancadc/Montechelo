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
        $novedad = Novedad::paginate(4);
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
        Novedad::create($request->all());
        return view('admin/crearnovedad')->with('crearnovedad','Novedad registrada correctamente');
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
        return redirect('admin/novedad')->with('update','El estado de la novedad se actualizo');
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
