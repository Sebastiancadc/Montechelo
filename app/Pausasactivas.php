<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pausasactivas extends Model
{
    protected $table = 'pausas_activas';
    protected $guarded = ['id'];
	protected $primaryKey = 'id';

    protected $fillable = [
        'video',
    ];
}