<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositorio;
use Illuminate\Support\Facades\Auth;


class RepositorioController extends Controller

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
        $repositorio = Repositorio::all();
        return view('admin.repositorio', compact('repositorio'));
    }

    public function store(Request $request)
    {
        Repositorio::create($request->all());
        return redirect('admin/repositorio');
    }


    public function createrepositorio()
    {
        return view('admin/repositorio/create');
    }

    public function createrepositorios(Request $request)
    {
        Repositorio::create($request->all());
        return redirect('admin/repositorio/create')->with('create','Repositorio registrada correctamente');
    }
  

    public function editrepositorio($id)
    {
        $repositorioActualizar = Repositorio::findOrFail($id);
        return view('admin/repositorio/editrepositorio',compact('repositorioActualizar'));
    }   

    public function update(Request $request, $id)
    {
        $repositorio = Repositorio::findOrFail($id);
        $repositorio->tipo_archivo = $request->tipo_archivo;
        $repositorio->autor = $request->autor;
        $repositorio->observaciones = $request->observaciones;

        $repositorio->imagen = $request->imagen;
        $repositorio->save();
        return redirect('admin/repositorio')->with('updaterepositorio','El estado del repositorio se actualizo');
    }


    public function destroy($id)
    {
        $data = Repositorio::findOrFail($id);
        $data->delete();
        return redirect('admin/repositorio')->with('eliminarrepositorio','se elimino');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }


    
//recordar añadir Request en el que caso que nuestro controlador no lo tenga importado

 public function subirArchivo(Request $request)
 {
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        $request->file('imagen')->store('public');
        dd("subido y guardado");
 }

}

