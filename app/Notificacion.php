<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    public $table = 'notifications';
    protected $guarded = ['id'];

    protected $primaryKey = 'id';

}