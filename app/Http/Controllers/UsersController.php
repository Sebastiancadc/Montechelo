<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permiso;
use App\User;

class UsersController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

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