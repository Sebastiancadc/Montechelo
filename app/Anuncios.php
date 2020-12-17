<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
    protected $table = 'anuncios';
    protected $guarded = ['id'];
	protected $primaryKey = 'id';

    protected $fillable = [
        'titulo','descripcion','user_id'
    ];
}
