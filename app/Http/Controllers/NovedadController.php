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
        $novedad = Novedad::all();
        return view('admin.novedad', compact('novedad'));
    }

    public function crear()
    {
       
        return view('admin.crearnovedad');
    }


    public function create(Request $request)
    {
     
        Novedad::create($request->all());
        return redirect()->route('admin.novedad');
    }

    public function update(Request $request, Novedad $novedad)
    {
 
        $novedad->update($request->all());
        return redirect()->route('admin.novedad');
    }

    public function delete(Novedad $novedad)
    {
        $novedad->delete();
        return redirect()->route('admin.novedad');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');

    }
}