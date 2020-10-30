<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;



class DirectorioController extends Controller
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

    public function index()
    {
        $usuarios = User::all();
        return view('admin.directorio', compact('usuarios'));
    }

    public function perfilUsuarios($id_Usuario)
    {
        $perfil = User::findOrFail($id_Usuario);
        return view('admin/perfilusuarios',compact('perfil'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect('auth.login');
        // $this->guard()->logout();Request $request

        // $request->session()->invalidate();

        // return $this->loggedOut($request) ?: redirect('admin.login');
    }
}
