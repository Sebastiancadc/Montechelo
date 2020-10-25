<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Eventos;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarioController extends Controller
{

    public function eventos()
    {
        $eventos = Eventos::paginate(4);
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
            'cumpleaños' => 'cumpleaños',
            'name' => 'name',
            'prefix'     => 'Cumpleaños',
        ],
    ];

    public function index()
    {
        $eventos = [];
        foreach ($this->sourcess as $source) {
            $cumplea = User::all();
            foreach ($cumplea as $model) {
                $cumpleaños = $model->getOriginal($source['cumpleaños']);
                $eventos[] = [  
                    'title' => trim($model->{$source['name']}
                    . " " . $source['prefix']),
                    'start' => $cumpleaños,
                    'className'=> 'eventoRojo',
                ];
            }
        }
        $events = [];
        foreach ($this->sources as $source) {
            $calendarEvents = Eventos::all();
            foreach ($calendarEvents as $model) {
                $start_time = $model->getOriginal($source['start_time']);
                $end_time = $model->getOriginal($source['end_time']);
                $className = $model->getOriginal($source['className']);
                if (!$start_time) {
                    continue;
                }
                $events[] = [
                    'title' => trim($model->{$source['name']}
                        . " " . $source['suffix']),
                    'start' => $start_time,
                    'end' => $end_time,
                    'className' => $className,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        $calendario= array_merge($events,$eventos);
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
