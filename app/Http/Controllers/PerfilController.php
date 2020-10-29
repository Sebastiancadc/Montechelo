<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PerfilController extends Controller
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
        $users = User::all();
        return view('admin.perfil', compact('users'));
    }

    public function editarperfil($id)
    {
        $userActualizar = User::findOrFail($id);
        return view('admin.perfil',compact('userActualizar'));
    }   

    public function updateProfile(Request $request, $id)
    {
     
        $UserUpdate = User::findOrFail($id);    
        $UserUpdate->name = $request->name;
        $UserUpdate->email = $request->email;
        $UserUpdate->genero = $request->genero;
        $UserUpdate->cumpleanios = $request->cumpleanios;
        $UserUpdate->save();
        return redirect()->action('PerfilController@index')->with('editarusu', 'Usuario editado correctamente');
    }  


}