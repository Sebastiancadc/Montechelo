<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categoria = Category::paginate(4);
        return view('admin.categoria', compact('categoria'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect('admin/categoria');
    }


    public function crearcategoria()
    {
        return view('admin/crearcategoria');
    }

    public function edit($id)
    {
        $categoriaActualizar = Category::findOrFail($id);
        return view('admin/categoria/editarcategoria',compact('categoriaActualizar'));
    }
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect('admin/categoria')->with('eliminar','la categoria se elimino');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }

}
