<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
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
        $usuariosregistrados = DB::table('usuario')->count();
        $hombres = DB::table('usuario')->wheregenero('Hombre')->count();
        $mujeres = DB::table('usuario')->wheregenero('Mujer')->count();
        $otro = DB::table('usuario')->wheregenero('otro')->count();
        $diseño = DB::table('usuario')->wherearea('diseño')->count();
        $marketing = DB::table('usuario')->wherearea('marketing')->count();
        $produccion = DB::table('usuario')->wherearea('produccion')->count();
        $programacion = DB::table('usuario')->wherearea('programacion')->count();
        $administradores = DB::table('usuario')->whererole('admin')->count();
        $colaboradores = DB::table('usuario')->whererole('colaborador')->count();

        return view('admin.usuario', compact('users','usuariosregistrados','hombres','mujeres','otro','diseño','marketing'
        ,'produccion','programacion','administradores','colaboradores'));
    }


    public function store(Request $request)
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->genero = $request->genero;
        $user->password = $request->password;
        $user->area = $request->area;
        $user->phone = $request->phone;
        $user->cumpleanios = new \Datetime($request->cumpleanios);
        $user->photo = 'http://localhost/Montechelo/public/images/users/d-avatar.jpg';
        $user->messenger_color = $request->messenger_color;
        $user->role = $request->role;
        $user->save();
        return redirect('admin/usuario')->with('crearUsuario', 'Usuario creado correctamente');
    }

    public function storeAdmin(Request $request)
    {

        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);
        $user2 = new User();
        $user2->name = $request->name;
        $user2->email = $request->email;
        $user2->genero = $request->genero;
        $user2->password = $request->password;
        $user2->area = $request->area;
        $user2->phone = $request->phone;
        $user2->cumpleanios = new \Datetime($request->cumpleanios);
        $user2->photo = 'http://localhost/Montechelo/public/images/users/d-avatar.jpg';
        $request['role'] = 'admin';
        $user2->save();
        return redirect('admin/usuario')->with('crearUsuario', 'Usuario creado correctamente');
    }

    public function crearAdmin()
    {
        return view('admin/crearadmin');
    }

    public function edit($id)
    {
        $userActualizar = User::findOrFail($id);
        return view('admin/forms/editaruser', compact('userActualizar'));
    }

    public function update(Request $request, $id)
    {

        $UserUpdate = new DateTime();
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);
        $UserUpdate = User::findOrFail($id);
        $UserUpdate->name = $request->name;
        $UserUpdate->lastname = $request->lastname;
        $UserUpdate->email = $request->email;
        $UserUpdate->genero = $request->genero;
        $UserUpdate->cumpleanios = new \Datetime($request->cumpleanios);
        $UserUpdate->role = $request->role;
        $UserUpdate->password = $request->password;
        $UserUpdate->area = $request->area;
        $UserUpdate->phone = $request->phone;
        $UserUpdate->save();
        return redirect()->action('HomeController@index')->with('editarUsuario', 'Usuario editado correctamente');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('admin/usuario')->with('eliminarusuario', 'El usuario se elimino');
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
