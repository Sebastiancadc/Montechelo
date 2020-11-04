<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('search'));
            $usuari = User::all();
            $usuarios = User::where('name','LIKE','%'.$query.'%')->orWhere('area','LIKE','%'.$query.'%')->get();
        }
        return view('admin.directorio', compact('usuari','query','usuarios'));
    }   
    public function buscador(Request $request)
    {
      $term = $request->get('term');
      $querys = User::where('name','LIKE','%' . $term . '%')->get();
      $quer = User::where('area','LIKE','%' . $term . '%')->get();
      $data= [];
      foreach($querys as $query){
          $data[]=[
              'label'=> $query->name
          ];

      }
      $datas= [];
      foreach($quer as $query){
          $datas[]=[
              'label'=> $query->area
          ];
      }
      $dates = array_merge($data,$datas);
      return $dates;
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
