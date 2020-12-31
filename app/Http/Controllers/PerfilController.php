<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;


class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuario = User::all();
        return view('admin.usuarios.perfil', compact('usuario'));
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
        $UserUpdate->lastname = $request->lastname;
        $UserUpdate->email = $request->email;
        $UserUpdate->genero = $request->genero;
        $UserUpdate->area = $request->area;
        $UserUpdate->phone = $request->phone;
        $UserUpdate->biografia = $request->biografia;
        $UserUpdate->phone_status = $request->phone_status;
        if ($request->has('phone_status')) {
            $UserUpdate->phone_status = "1";
        } else {
            $UserUpdate->phone_status = "0";
        }
        $UserUpdate->cumpleanios = new \Datetime($request->cumpleanios);
        $UserUpdate->save();
        return redirect()->action('PerfilController@index')->with('editarusu', 'Usuario editado correctamente');
    }  

    public function updatePhoto(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image'
        ]);

        $user=Auth::user();
        $extension =$request->file('photo')->getClientOriginalExtension();
        $file_name = $user->id. '.' .$extension;
            
        $path= public_path('images/users/'.$file_name);

        Image::make($request->file('photo'))->fit(144,144)->save($path);
        $user->photo = 'http://localhost/Montechelo/public/images/users/'.$file_name;
        $user->save();  
        $data['success'] =true;
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }

    public function updatePhotoportada(Request $request)
    {
        $this->validate($request, [
            'photo_portada' => 'required|image'
        ]);

        $user=Auth::user();
        $extension =$request->file('photo_portada')->getClientOriginalExtension();
        $file_name = $user->id. '.' .$extension;
            
        $path= public_path('images/portada/'.$file_name);

        Image::make($request->file('photo_portada'))->fit(1000,600)->save($path);
        $user->photo_portada = 'http://localhost/Montechelo/public/images/portada/'.$file_name;
        $user->save();  
        $data['success'] =true;
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }
}