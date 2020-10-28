<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Repositorio extends Model
{
    use Notifiable;

    protected $table = 'repositorio';
    protected $guarded = ['Id_Repositorio'];

	protected $primaryKey = 'Id_Repositorio';
    protected $fillable = [
        'Id_Repositorio','tipo_archivo','autor','observaciones','carpetas','staus','imagen','created_at','updated_at',
    ];
}
