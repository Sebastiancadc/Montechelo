<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositorio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


use Redirect;
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

   
    
    public function crearrepositorio()
    {
        return view('admin/repositorio/create');
    }

    public function crearrepositorios(Request $request)
    {
        return view('admin.repositorio.create');
    }
  
    public function store(Request $request)
    {
    
    
 

        $messages = [
          
          //'image.mimes' =>'El archivo debe  corresponder a un formato de imagen',
          'image.max' =>'La imagen no debe ser mayor que 2 mb.'


        ];
         $this->validate($request,  $messages);

         $repositorio = new Repositorio($request->all());
        


         if ($request->file('image')) {
            $nombre = Storage::disk('archivosave')->put('archivos/repositorio', $request->file('image'));
            $repositorio->fill(['image' => asset($nombre)])->save();
         }
          Session::flash('message','Publicación creada correctamente');

          return back();


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
        $repositorio->image=$request->image;
        
        $repositorio->save();
        
        
        return redirect('admin/repositorio')->with('updaterepositorio','El repositorio se actualizo');
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

