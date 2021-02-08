<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function set_language($lang)
    {
       if(array_key_exists($lang, config('languages'))){
           session()->put('applocale' , $lang);
       }
       return back();
    }
}
