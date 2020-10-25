<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eventos extends Model
{
    use SoftDeletes;

    public $table = 'events';
    protected $guarded = ['id'];

    protected $primaryKey = 'id';
    // protected $dates = [
    //     'name',
    //     'description',
    //     'start_time',
    //     'end_time',
    //     'className',
    //     'created_at',
    //     'updated_at',
        
    // ];

    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'className',

    ];

    public function setCrbDateAttribute($value)
    {
        $this->attributes['start_time'] = Carbon::createFromFormat('Y-m-d\TH:i', $value);
    }
}
