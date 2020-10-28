<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class Helpers
{

    public static function fechaCumpleanos($_date)
    {


        $descomponerFecha = strtotime($_date);
        $anio = date("Y");
        $dia = date("d", $descomponerFecha);
        $mes = date("m", $descomponerFecha);
        $result = $anio . '-' . $mes . '-' . $dia;
        return $result;
    }


    public static function usuario($users)
    {

        $eventos = [];
        foreach ($users as $user) {
            $fechaCumpleanos = self::fechaCumpleanos($user->cumpleanios);
            $eventos[] = [
                'title' => 'Cmpl' . " " . $user->name,
                'start' => $fechaCumpleanos,
                'className' => 'eventoRojo',
            ];
        }
        return $eventos;
    }

    public static function formatearFecha($cumpleanios) 
    {   
        $fechaformateada =Carbon::parse($cumpleanios)->isoFormat('D MMMM');
        return $fechaformateada;
    }


    public static function formatearFechaPerfil($cumpleanios) 
    {   
        $fechaformateada =Carbon::parse($cumpleanios)->format('d/m/Y');
        return $fechaformateada;
    }
    
}