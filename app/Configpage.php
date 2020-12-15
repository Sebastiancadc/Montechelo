<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configpage extends Model
{
    protected $table = 'settings-page';
    protected $guarded = ['id'];
	protected $primaryKey = 'id';

    protected $fillable = [
        'colornavho','colornavver','logologin','logologin','colorbtnprimary','colorbtndanger'
        ,'colorbtnwarning','colortitulo','colortexto','logoisotipo','textmision','textvision',
        'textvalores','textpolitica','textplanestr','textorganigrama','textuniestra'
    ];
}
