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
       'Tipo_de_solicitud','Fecha','Nombre','Apellido','Cedula','Estado_Solicitud', 'Area_de_trabajo'
    ];
}
