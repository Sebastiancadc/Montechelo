<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Eventos;
use App\Events\EventoEvent;
use App\User;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Http\Requests\CalendarioRequest;
use App\Notifications\EventoNotification;
use App\Pausasactivas;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CalendarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function eventos()
    {
        $eventos = Eventos::paginate(10);
        $evento = DB::table('eventos')->wheredeleted_at(null)->count();
        $importante = DB::table('eventos')->whereclassname('importante')->count();
        $especial = DB::table('eventos')->whereclassname('especial')->count();
        $advertencia = DB::table('eventos')->whereclassname('advertencia')->count();

        return view('admin.calendario.eventos', compact('eventos','evento','importante','especial','advertencia'));
    }

    public $sources = [
        [
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'name'      => 'name',
            'description' => 'description',
            'user_id_user' => 'user_id_user',
            'className' => 'className',
            'prefix'     => 'Evento',
            'suffix'     => '',
            'route'      => 'verEventos',
        ],
    ];

    public $sourcess = [
        [
            'cumpleanos' => 'cumpleanios',
            'name' => 'name',
            'prefix'     => 'Cumpleaños',
        ],
    ];

    public function index()
    {
        $usuariologeado = Auth::user();
        $admins = User::where('role','=','admin')->pluck('id');
         
        $u =User::all();
        $h =Helpers::usuario($u);
    
        if($usuariologeado->role =='colaborador'){
            $eventosadministradores = Eventos::whereIn('Usuario_id_Usuario',$admins)->get()->toArray();
            $eventoscolaborador = Eventos::where('Usuario_id_Usuario','=',$usuariologeado->id)->get()->toArray();
            $agrupaciondeeventos= array_merge($eventosadministradores,$eventoscolaborador);
            $events = [];
                foreach ($agrupaciondeeventos as $model) {
                    
                    $events[] = [
                        'title' => $model['name'],
                        'start' => $model['start_time'],
                        'end' => $model['end_time'],
                        'className' => $model['className'],
                        'url'   => route('verEventos',$model['id']),
                        
                    ];
                }
        $calendario = array_merge($events,$h);
        
        }else{
            $eventos = Eventos::all()->toArray();
            $events = [];
                foreach ($eventos as $model) {
                    
                    $events[] = [
                        'title' => $model['name'],
                        'start' => $model['start_time'],
                        'end' => $model['end_time'],
                        'className' => $model['className'],
                        'url'   => route('verEventos',$model['id']),
                    ];
                }
            $calendario= array_merge($events,$h);
            
        }
        $pausasramdom = Pausasactivas::select('video')
        ->inRandomOrder() 
        ->first();
        return view('admin.calendario.calen', compact('calendario','pausasramdom'));
    }


    public function crearevento(CalendarioRequest $request)
    {
        $eventos = new Eventos();
        $eventos->name = $request->name;
        $eventos->description = $request->description;
        $eventos->className = $request->className;
        $eventos->start_time = new \Datetime($request->start_time);
        $eventos->end_time = new \Datetime($request->end_time);

        $eventos->Usuario_id_Usuario = $request->Usuario_id_Usuario;
        $eventos->save();
        
        if ( Auth::user()->role == 'admin'){
        event(new EventoEvent($eventos));
        }
        else{
            Auth::user()->notify(new EventoNotification($eventos));
        }
        return back()->with('crearevento', 'Evento registrado correctamente');
    }

    public function creareventoad(CalendarioRequest $request)
    {
        $evento = new Eventos();
        $evento->name = $request->name;
        $evento->description = $request->description;
        $evento->className = $request->className;
        $evento->start_time = new \Datetime($request->start_time);
        $evento->end_time = new \Datetime($request->end_time);
        $evento->Usuario_id_Usuario = $request->Usuario_id_Usuario;
        $evento->save();
        return redirect()->action('CalendarioController@eventos')->with('crearevento', 'Evento registrado correctamente');
    }
    public function verevento($id)
    {
        $eventos = Eventos::find($id);
        return view('admin.calendario.edit', compact('eventos'));
    }
    public function vereventoad($id)
    {
        $eventos = Eventos::find($id);
        return view('admin.calendario.editAd', compact('eventos'));
    }
    
    public function verEventos($id)
    {
        $eventos = Eventos::find($id);
        return view('admin.calendario.ver', compact('eventos'));
    }
    public function editarEvento(CalendarioRequest $request, $id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->Usuario_id_Usuario = $request->Usuario_id_Usuario;
        $evento->name = $request->name;
        $evento->description = $request->description;
        $evento->className = $request->className;
        $evento->start_time = new \Datetime($request->start_time);
        $evento->end_time = new \Datetime($request->end_time);
        $evento->save();
       
        return redirect()->action('CalendarioController@index')->with('editarevento', 'Evento editado correctamente');
    
    }
    public function editarEventoAd(CalendarioRequest $request, $id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->Usuario_id_Usuario = $request->Usuario_id_Usuario;
        $evento->name = $request->name;
        $evento->description = $request->description;
        $evento->className = $request->className;
        $evento->start_time = new \Datetime($request->start_time);
        $evento->end_time = new \Datetime($request->end_time);
        $evento->save();
       
        return redirect()->action('CalendarioController@eventos')->with('editarevento', 'Evento editado correctamente');
    
    }
    public function destroy($id)
    {
        $data = Eventos::findOrFail($id);
        $data->delete();
        return redirect()->action('CalendarioController@index')->with('seelimino', 'Evento eliminado correctamente');
    }
    public function destroyad($id)
    {
        $data = Eventos::findOrFail($id);
        $data->delete();
        return redirect()->action('CalendarioController@eventos')->with('seeliminoad', 'Evento eliminado correctamente');
    }
}
