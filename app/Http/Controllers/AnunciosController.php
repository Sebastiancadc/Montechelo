<?php

namespace App\Http\Controllers;

use App\Anuncios;
use App\Events\AnuncioEvent;
use App\Notifications\AnunciosNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Builder\InvocationMocker;

class AnunciosController extends Controller
{
    public function index()
    {         
        $anuncios = Anuncios::all();
        return view('admin.anuncios.index', compact('anuncios'));
    }

    public function crear(Request $request)
    {
        $anuncio = new Anuncios();
        $anuncio->titulo = $request->titulo;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->tipo = $request->tipo;
        $anuncio->user_id = $request->user_id;
        $anuncio->save();
        event(new AnuncioEvent($anuncio));

        return back()->with('creareanuncio', 'Anuncio registrado correctamente');
    }

    public function destroy($id)
    {
        $data = Anuncios::findOrFail($id);
        $data->delete();
        return redirect()->action('AnunciosController@index')->with('seelimino', 'Anuncio eliminado correctamente');
    }

    public function Listanotificaciones()
    { 
        $notificaciones = Auth::user()->Notifications;
        return view('admin.notificaciones.index', compact('notificaciones'));
    }

    public function markNotification(Request $request){
        Auth::user()->unreadNotifications
        ->when($request->input('id'), function($query) use ($request){
            return $query->where('id', $request->input('id'));
        })->markAsRead();
        return response()->noContent();
    }

}