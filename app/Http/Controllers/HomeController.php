<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
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
        $users = User::paginate(4);
        return view('admin.usuario', compact('users'));
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
        $user->cumpleanios = new \Datetime($request->cumpleanios);
        $user->role = $request->role;
        $user->save();
        return redirect('admin/usuario');
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
        $user2->cumpleanios = new \Datetime($request->cumpleanios);
        $request['role'] = 'admin';
        $user2->save();
        return redirect('admin/usuario');
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
        $UserUpdate->email = $request->email;
        $UserUpdate->genero = $request->genero;
        $UserUpdate->cumpleanios = new \Datetime($request->cumpleanios);
        $UserUpdate->role = $request->role;
        $UserUpdate->password = $request->password;
        $UserUpdate->area = $request->area;
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
