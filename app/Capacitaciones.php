<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Capacitaciones extends Model
{
    use Notifiable;
    protected $table = 'Capacitaciones';
    protected $guarded = ['id_capacitacion'];
	protected $primaryKey = 'id_capacitacion';
    protected $fillable = [
        'titulo','categoria','fecha','descripcion','link','user_id'
    ];
}
