<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\App;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('applocale')){
            $config= config('languages')[session('applocale')];
            setLocale(LC_TIME, $config[1] . '.utf8');
            Carbon::setLocale(session('applocale'));
            App::setLocale(session('applocale'));
        }else{
            session()->put('applocale',config('app.fallback_locale'));
            setLocale(LC_TIME , 'es_Es.utf8');
            Carbon::setLocale(session('applocale'));
            App::setLocale(config('app.fallback_locale'));
        } 
        return $next($request);
    }
}
