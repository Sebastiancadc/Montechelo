<?php

namespace App\Http\Controllers;

use App\buzon_de_sugerencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $buzonsu = DB::table('buzon_de_sugerencias')->count();
        $quejas = DB::table('buzon_de_sugerencias')->wheretipo_sugerencia('quejas')->count();
        $reclamos = DB::table('buzon_de_sugerencias')->wheretipo_sugerencia('reclamos')->count();
        $observacion = DB::table('buzon_de_sugerencias')->wheretipo_sugerencia('observacion')->count();
        $novedad = DB::table('buzon_de_sugerencias')->wheretipo_sugerencia('novedad')->count();
        $felicitaciones = DB::table('buzon_de_sugerencias')->wheretipo_sugerencia('felicitaciones')->count();       
        $diseño = DB::table('buzon_de_sugerencias')->wherearea('diseño')->count();
        $recursoshumanos = DB::table('buzon_de_sugerencias')->wherearea('Recursos Humanos')->count();
        $administracion = DB::table('buzon_de_sugerencias')->wherearea('administracion')->count();
        $software = DB::table('buzon_de_sugerencias')->wherearea('software')->count();
        return view('admin.buzon.index', compact('buzon','buzonsu','quejas','reclamos','observacion',
        'novedad','felicitaciones','diseño','software','recursoshumanos','administracion'));
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
