<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Helpers\Helpers;
use App\Noticia;
use App\Notificacion;
use App\Pausasactivas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
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
        
        $admins = User::where('role','=','admin')->pluck('id');
        $u =User::all();
        $e =Noticia::all();
        $h =Helpers::usuario($u);
        if($usuariologeado == null){
            return view('admin.login');
        }
        else
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
        $noticias= Noticia::latest()->take(2)->get();
        $noticias2= Noticia::first()->take(1)->get();
        
        $pausasramdom = Pausasactivas::select('video')
        ->inRandomOrder() 
        ->first();

        return view('admin.dashboards.dashboard',compact('users','eventos','calendario'
        ,'modal','noticias','noticias2','pausasramdom'));
    }

    public function indexAdmin()
    {
        $usuariosregistrados = DB::table('usuario')->count();
        $eventos = DB::table('eventos')->wheredeleted_at(null)->count();
        $buzon = DB::table('buzon_de_sugerencias')->count();
        $novedad = DB::table('novedad')->count();
        $solicitudes = DB::table('solicitud')->count();
        $noticias = DB::table('noticias')->count();
        $capacitaciones = DB::table('capacitaciones')->count();
        $pausas = DB::table('pausas_activas')->count();
        $novedadesPendientes = DB::select("SELECT * FROM novedad WHERE estado = 'pendiente'");
        $solicidesPendientes = DB::select("SELECT * FROM solicitud WHERE estado_solicitud = 'pendiente'");        
        return view('admin.dashboards.dashboardAdmin', compact('usuariosregistrados','eventos','buzon','novedad'
    ,'solicitudes','noticias','capacitaciones','pausas','novedadesPendientes','solicidesPendientes'));
    }

}