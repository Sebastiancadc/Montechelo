<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PausasActivasController extends Controller
{
    public function index()
    {
        return view('admin/pausasactivas');
    }

}
