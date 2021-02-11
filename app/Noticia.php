<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class Noticia extends Model
{
    use Notifiable;

    protected $table = 'noticias';
    protected $guarded = ['Id_noticia'];
    protected $primaryKey = 'Id_noticia';

    protected $fillable = ['user_id','category','title','slug','body','autor','image','created_at','updated_at'];



    public function user()
        {
        return $this->belongsTo('App\User','user_id','id');
    }
}
