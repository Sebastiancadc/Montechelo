<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categoria';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

     protected $fillable = [
        'name'
    ];

    public function noticia()
    {
        return $this->hasMany('App\Noticia');
    }
}
