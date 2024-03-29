<?php

namespace App\Http\Controllers;

use App\Pausasactivas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class PausasActivasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.pausas-activas.pausasactivas');
    }

    public function admin()
    {
        $pausas = Pausasactivas::all();
        return view('admin.pausas-activas.index',compact('pausas'));
    }  


    public function store(Request $request)
    {

         $pausas = new Pausasactivas($request->all());

         if ($request->file('video')) {
            $nombre = Storage::disk('videosave')->put('pausasacitvas',$request->file('video'));
            $pausas->fill(['video' => asset($nombre)])->save();
         }
         if(app()->getLocale() == 'es'){
            return redirect()->action('PausasActivasController@admin')->with('Crearv', 'Pausa creada correctamente');
           }else{
            return redirect()->action('PausasActivasController@admin')->with('Crearv', 'Pause created correctly');
        }
         
    }

    public function edit($id)
    {
        $pausasEditar = Pausasactivas::findOrFail($id);
        return view('admin.pausas-activas.editar', compact('pausasEditar'));
    }

    
    public function update(Request $request, $id)
    {        

        $pausaUpdate = Pausasactivas::findOrFail($id);

        $pausaUpdate->id = $request->id;
        $extension =$request->file('video')->getClientOriginalExtension();
        $file_name = $pausaUpdate->id. '.' .$extension;
        $path= public_path('pausasacitvas/'.$file_name);

        Image::make($request->file('video'))->fit(144,144)->save($path);
        $pausaUpdate->video = 'http://intranet-montechelo.qa.groupcos.com/pausasacitvas/'.$file_name;
        $pausaUpdate->save();  
        $data['success'] =true;
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }
    public function destroy($id)
    {
        $data = Pausasactivas::findOrFail($id);
        $data->delete();
        if(app()->getLocale() == 'es'){
            return back()->with('eliminar','La pausa activa se elimino correctamente');
           }else{
            return back()->with('eliminar','The active pause was successfully removed');
        }
        
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }

}