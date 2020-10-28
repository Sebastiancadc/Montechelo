<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Helpers\Helpers;
use App\User;
use Illuminate\Http\Request;

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

        $events = [];
        foreach ($this->sources as $source) {
            $calendarEvents = Eventos::all();
            foreach ($calendarEvents as $model) {
                $start_time = $model->getOriginal($source['start_time']);
                $end_time = $model->getOriginal($source['end_time']);
                $className = $model->getOriginal($source['className']);
                $name = $model->getOriginal($source['name']);
                if (!$start_time) {
                    continue;
                }
                $events[] = [
                    'title' => $name,
                    'start' => $start_time,
                    'end' => $end_time,
                    'className' => $className,
                ];
            }
        }
       
        $users = User::whereMonth('cumpleanios',"=",date('m'))->get();
        $eventos = Eventos::whereMonth('start_time',"=",date('m'))->get();
        
        return view('admin.dashboard',compact('users','eventos','events'));
    }


}