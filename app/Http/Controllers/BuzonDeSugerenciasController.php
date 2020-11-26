<?php

namespace App\Http\Controllers;

use App\buzon_de_sugerencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BuzonDeSugerenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buzon = buzon_de_sugerencias::all();
        return view('admin.buzon.index', compact('buzon'));
    }

    public function index2()
    {
        $buzon = buzon_de_sugerencias::all();
        return view('admin.buzon', compact('buzon'));
    }

    public function store(Request $request)
    {
        buzon_de_sugerencias::create($request->all());
        return redirect('admin/buzon');
    }

    public function crearbuzon()
    {
        return view('admin/crearbuzon');
    }

    public function crearsugerencias(Request $request)
    {
        buzon_de_sugerencias::create($request->all());
        return redirect()->action('BuzonDeSugerenciasController@index2')->with('buzon_crear', 'Sugerencia registrada correctamente');
    }

    public function destroy($Id_sugerencia)
    {


        $eliminarsugerencia = buzon_de_sugerencias::findOrFail($Id_sugerencia);
        $eliminarsugerencia->delete();
        return back()->with('eliminar', 'La sugerencia se elimino corectamente ');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}
