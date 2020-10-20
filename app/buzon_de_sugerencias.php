<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class buzon_de_sugerencias extends Model
{
    use Notifiable;

    protected $table = 'buzon_de_sugerencias';
    protected $guarded = ['Id_sugerencia'];

	protected $primaryKey = 'Id_sugerencia';
    protected $fillable = [
        'tipo_sugerencia','descripcion','area'
    ];
}
