<?php

namespace App\Http\Controllers;

use App\Anuncios;
use App\Events\AnuncioEvent;
use App\Http\Requests\AnunciosRequest;
use App\Notifications\AnunciosNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Builder\InvocationMocker;

class AnunciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {         
        $anuncios = Anuncios::all();
        $anuncio = DB::table('anuncios')->count();
        $default = DB::table('anuncios')->wheretipo('default')->count();
        $info = DB::table('anuncios')->wheretipo('info')->count();
        $success = DB::table('anuncios')->wheretipo('success')->count();
        $warning = DB::table('anuncios')->wheretipo('warning')->count();
        $danger = DB::table('anuncios')->wheretipo('danger')->count();

        return view('admin.anuncios.index', compact('anuncios','anuncio','default','info'
        ,'success','warning','danger'));
    }

    public function crear(AnunciosRequest $request)
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