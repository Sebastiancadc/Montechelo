<?php

namespace App\Http\Controllers;

use App\Pausasactivas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PausasActivasController extends Controller
{
    public function index()
    {
        return view('admin/pausasactivas');
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
         return redirect()->action('PausasActivasController@admin')->with('Crearv', 'Pausa creada correctamente');
    }

    public function edit($id)
    {
        $pausasEditar = Pausasactivas::findOrFail($id);
        return view('admin.pausas-activas.editar', compact('pausasEditar'));
    }
    public function update(Request $request, $id)
    {        
        $pausaUpdate = Pausasactivas::findOrFail($id);
        $pausaUpdate->save();

        $pausa = Pausasactivas::find($id);
        $pausa->update($request->all());

        if ($request->file('video')) {
            $nombre = Storage::disk('videosave')->put('pausasacitvas',$request->file('video'));
            $pausa->fill(['video' => asset($nombre)])->save();
            }
           
        return redirect()->action('PausasActivasController@admin')->with('Editarpa', 'Pausa editada correctamente');
    }


    public function destroy($id)
    {
        $data = Pausasactivas::findOrFail($id);
        $data->delete();
        return back()->with('eliminar','La pausa activa se elimino correctamente');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }

}