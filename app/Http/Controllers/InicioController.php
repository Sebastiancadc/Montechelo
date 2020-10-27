<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {   
        
        $users = User::whereMonth('cumpleanios',"=",date('m'))->get();
    
        return view('admin.dashboard',compact('users'));
    }

}