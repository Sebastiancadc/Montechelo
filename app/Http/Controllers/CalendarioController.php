<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Eventos;
use App\User;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Auth;

class CalendarioController extends Controller
{

    public function eventos()
    {
        $eventos = Eventos::paginate(6);
        return view('admin.calendario.eventos', compact('eventos'));
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
        $admins = User::where('role','=','admin')->pluck('id_Usuario');
         
        $u =User::all();
        $h =Helpers::usuario($u);
    
        if($usuariologeado->role =='colaborador'){
            $eventosadministradores = Eventos::whereIn('Usuario_id_Usuario',$admins)->get()->toArray();
            $eventoscolaborador = Eventos::where('Usuario_id_Usuario','=',$usuariologeado->id_Usuario)->get()->toArray();
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
        return view('admin.calen', compact('calendario'));
    }


    public function crearevento(Request $request)
    {
        $evento = new Eventos();
        $evento->name = $request->name;
        $evento->description = $request->description;
        $evento->className = $request->className;
        $evento->start_time = new \Datetime($request->start_time);
        $evento->end_time = new \Datetime($request->end_time);
        $evento->Usuario_id_Usuario = $request->Usuario_id_Usuario;
        $evento->save();
        return back()->with('crearevento', 'Evento registrado correctamente');
    }
    public function verevento($id)
    {
        $eventos = Eventos::find($id);
        return view('admin.calendario.edit', compact('eventos'));
    }

    public function verEventos($id)
    {
        $eventos = Eventos::find($id);
        return view('admin.calendario.ver', compact('eventos'));
    }
    public function editarEvento(Request $request, $id)
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
    public function destroy($id)
    {
        $data = Eventos::findOrFail($id);
        $data->delete();
        return redirect()->action('CalendarioController@index')->with('seelimino', 'Evento eliminado');
    }
}
