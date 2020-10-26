<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('inicio');
    }

    public function index2()
    {
        $users = User::whereMonth('cumpleaños',"=", date('m'))->get();
        return view('admin.dashboard',compact('users'));
    }

}