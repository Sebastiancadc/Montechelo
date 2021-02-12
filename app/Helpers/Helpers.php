<?php

namespace App\Helpers;

use Carbon\Carbon;
use DateTime;
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
        $fechaformateada =Carbon::parse($cumpleanios)->format('d-m-Y');
        return $fechaformateada;
    }

    public static function formatearFechahoy($fecha) 
    {   
        $fechaformateada = Carbon::parse($fecha)->format('d-m-Y');
        return $fechaformateada;
    }

    public static function modal($cumpleanios) 
    {   
        $fechamodal =Carbon::parse($cumpleanios)->format('m-d');
        return $fechamodal;
    }

    public static function edad($cumpleanios) 
    {   
        $fecha_nacimiento = new DateTime($cumpleanios);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        return $edad->y;
    }

    
    
}