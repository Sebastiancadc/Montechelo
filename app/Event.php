<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table= 'eventos';

    //
    protected $fillable = [
        'titulo', 'descripcion','fecha','class'
    ];

    public $timestamps = false;
}