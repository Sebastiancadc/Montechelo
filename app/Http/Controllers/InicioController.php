<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Helpers\Helpers;
use App\Noticia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public $sources = [
        [
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'name'      => 'name',
            'className' => 'className',

        ],
    ];
    public function index()
    {

        $usuariologeado = Auth::user();
        $admins = User::where('role','=','admin')->pluck('id_Usuario');



        $u =User::all();
        $e =Noticia::all();
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
                    ];
                }
        $calendario = array_merge($events);

        }else{
            $eventos = Eventos::all()->toArray();
            $events = [];
                foreach ($eventos as $model) {

                    $events[] = [
                        'title' => $model['name'],
                        'start' => $model['start_time'],
                        'end' => $model['end_time'],
                        'className' => $model['className'],
                    ];
                }
            $calendario= array_merge($events);

        }

        $users = User::whereMonth('cumpleanios',"=",date('m'))->get();
        $eventos = Eventos::whereMonth('start_time',"=",date('m'))->get();
        $modal = User::whereDay('cumpleanios',"=",date('d'))->get();
        $noticias = Noticia::all();

        return view('admin.dashboard',compact('users','eventos','calendario','modal','noticias'));
    }


}
