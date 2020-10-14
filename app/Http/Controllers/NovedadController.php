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

    public function store(Request $request)
    {
        Novedad::create($request->all());
        return redirect('admin/novedad');
    }

    public function update(Request $request, $novedad)
    {

        $data = Novedad::find($novedad);
        $data->update($request->all());
        return redirect('admin/novedad');
    }


    public function destroy($novedad)
    {

        $data = Novedad::find($novedad);
        $data->delete();

        return redirect('admin/novedad');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}