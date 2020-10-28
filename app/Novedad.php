<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Novedad extends Model
{
    use Notifiable;

    protected $table = 'novedad';
    protected $guarded = ['id_novedad'];

	protected $primaryKey = 'id_novedad';
    protected $fillable = [
        'area','fecha','novedad','descripcion','estado'
    ];
}



