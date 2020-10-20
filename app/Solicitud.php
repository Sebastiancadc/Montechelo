<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Solicitud extends Model
{
    use Notifiable;

    protected $table = 'solicitud';
    protected $guarded = ['Id_Solicitud'];

	protected $primaryKey = 'Id_Solicitud';
    protected $fillable = [
       'tipo_solicitud','fecha','nombre','apellido','cedula','telefono','estado_solicitud', 'area_trabajo',
    ];
    
}
