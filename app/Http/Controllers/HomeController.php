<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        User::create($request->all());
        return redirect('admin/usuario');
    }

    public function edit($id)
    {
        $userActualizar = User::findOrFail($id);
        return view('admin/forms/editaruser',compact('userActualizar'));
    }   

    public function update(Request $request, $id)
    {
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);
        $UserUpdate = User::findOrFail($id);
        $UserUpdate->name = $request->name;
        $UserUpdate->email = $request->email;
        $UserUpdate->password = $request->password;
        $UserUpdate->save();
        return redirect('admin/usuario');
    }


    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('admin/usuario')->with('eliminarusuario','El usuario se elimino');
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
