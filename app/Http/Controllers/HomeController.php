<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\Request;
use App\User;
use App\Permisos;
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

        return view('admin.usuarios.usuario', compact('users','usuariosregistrados','hombres',
        'mujeres','otro','diseño','marketing'
        ,'produccion','programacion','administradores','colaboradores'));
    }

    public function CrearRol(Request $request)
    {

        $Rol = new Permisos();
        $Rol->Roles = $request->Roles;
        $Rol->save();
        return redirect()->action('HomeController@permisoslista')->with('Rol', 'Rol creado correctamente');
    }
    public function permisoslista()
    {
        $permisos = Permisos::all();
        return view('admin.usuarios.permisos', compact('permisos'));
    }

    public function editarpermisos($id)
    {
        $permisoActualizar = Permisos::findOrFail($id);
        return view('admin/usuarios/editarpermisos', compact('permisoActualizar'));
    }

    public function updatepermisos(Request $request, $id)
    {
        $permisos = Permisos::findOrFail($id);
        $permisos->chat_status = $request->chat_status;
        if ($request->has('chat_status')) {
            $permisos->chat_status = "1";
        } else {
            $permisos->chat_status = "0";
        }
        $permisos->directorio_status = $request->directorio_status;
        if ($request->has('directorio_status')) {
            $permisos->directorio_status = "1";
        } else {
            $permisos->directorio_status = "0";
        }
        $permisos->talento_status = $request->talento_status;
        if ($request->has('talento_status')) {
            $permisos->talento_status = "1";
        } else {
            $permisos->talento_status = "0";
        }
        $permisos->repositorio_status = $request->repositorio_status;
        if ($request->has('repositorio_status')) {
            $permisos->repositorio_status = "1";
        } else {
            $permisos->repositorio_status = "0";
        }
        $permisos->calendario_status = $request->calendario_status;
        if ($request->has('calendario_status')) {
            $permisos->calendario_status = "1";
        } else {
            $permisos->calendario_status = "0";
        }
        $permisos->solicitud_status = $request->solicitud_status;
        if ($request->has('solicitud_status')) {
            $permisos->solicitud_status = "1";
        } else {
            $permisos->solicitud_status = "0";
        }
        $permisos->buzon_status = $request->buzon_status;
        if ($request->has('buzon_status')) {
            $permisos->buzon_status = "1";
        } else {
            $permisos->buzon_status = "0";
        }
        $permisos->plan_status = $request->plan_status;
        if ($request->has('plan_status')) {
            $permisos->plan_status = "1";
        } else {
            $permisos->plan_status = "0";
        }
        $permisos->novedad_status = $request->novedad_status;
        if ($request->has('novedad_status')) {
            $permisos->novedad_status = "1";
        } else {
            $permisos->novedad_status = "0";
        }
        $permisos->save();
        return redirect()->action('HomeController@permisoslista')->with('Permisosedit', 'Permisos editados correctamente');
    }
    

    public function store(UsuarioRequest $request)
    {
        $user = new DateTime();
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
        $user->Rol_Id_Rol = $request->Rol_Id_Rol;
        $user->save();
        return redirect('admin/usuario')->with('crearUsuario', 'Administrador creado correctamente');
    }

    public function storeCola(UsuarioRequest $request)
    {
        $user2 = new DateTime();
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
        $user2->role = $request->role;
        $user2->Rol_Id_Rol = $request->Rol_Id_Rol;
        $user2->save();
        return redirect('admin/usuario')->with('crearUsuario', 'Colaborador creado correctamente');
    }

    public function crearAdmin()
    {
        return view('admin/crearadmin');
    }

    public function edit($id)
    {
        $userActualizar = User::findOrFail($id);
        return view('admin/usuarios/editaruser', compact('userActualizar'));
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
        $UserUpdate->cumpleanios = new Datetime($request->cumpleanios);
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
