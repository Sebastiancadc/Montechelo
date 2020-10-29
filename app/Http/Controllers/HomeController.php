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
        $request['role']='colaborador';
        $user->save();
        return redirect('admin/usuario');
    }

    public function storeAdmin(Request $request)
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
        $user->cumpleanios = new \Datetime($request->cumpleanios);
        $request['role']='admin';
        $user->save();
        return redirect('admin/usuario');
    }

    public function crearAdmin()
    {
        return view('admin/crearadmin');
    }

    public function edit($id)
    {
        $userActualizar = User::findOrFail($id);
        return view('admin/forms/editaruser',compact('userActualizar'));
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
        $UserUpdate->format("Y-m-d");
        $UserUpdate->cumpleanios = new \Datetime($request->cumpleanios);
        $UserUpdate->role = $request->role;
        $UserUpdate->password = $request->password;
        $UserUpdate->area = $request->area;
        $UserUpdate->save();
        // return redirect('admin/usuario');
        return redirect()->action('HomeController@index')->with('editarUsuario', 'Usuario editado correctamente');
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

    public function postProfileImage(Request $request)
{
    $this->validate($request, [
        'photo' => 'required|image'
    ]);
    $user= Auth::user();
    $extension = $file->getClientOriginalExtension();
    $fileName = auth()->id() . '.' . $extension;
    $path = public_path('admin//'.$fileName);

  

    Image::make($request->file('Photo')->fit(144,144))->save();

  
    $user->photo_extension = $extension;
    $saved = $user->save();

    $data['success'] = $saved;
    $data['path'] = $user->getAvatarUrl() . '?' . uniqid();

    return $data;
}
}