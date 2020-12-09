<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permiso;
use App\User;

class UsersController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
      $users = User::all();
      return view('admin.usuario', compact('users'));
   }
  
   public function roles()
   {
      $permisos = Permiso::all();
      return view('admin.forms.permisos', compact('permisos'));
   }
  
}