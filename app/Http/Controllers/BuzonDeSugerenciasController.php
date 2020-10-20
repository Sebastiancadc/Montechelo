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
        $buzon=buzon_de_sugerencias::paginate(4);
        return view('admin.buzon.index', compact('buzon'));
    }

    public function index2()
    {
        $buzon=buzon_de_sugerencias::paginate(4);
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
        return redirect('admin/buzon')->with('buzon_crear','Sugerencia registrada correctamente');
    }




    public function destroy($id)
    {
        $data = buzon_de_sugerencias::findOrFail($id);
        $data->delete();
        return redirect('admin/buzon/index')->with('eliminarsugerencia','la sugerencia  se elimino');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}
