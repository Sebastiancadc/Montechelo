<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Permisos extends Authenticatable implements MustVerifyEmail
{

    protected $table = 'rol';
    protected $guarded = ['Id_Rol'];
	protected $primaryKey = 'Id_Rol';

    protected $fillable = [
        'Roles','chat_status','directorio_status','talento_status','repositorio_status','calendario_status',
        'solicitud_status','buzon_status','plan_status','novedad_status'
    ];


}