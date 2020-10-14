<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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


    public function store(Request $request)
    {

        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);
        User::create($request->all());
        return redirect('admin/usuario');
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);
        $data = User::find($id);
        $data->update($request->all());
        return redirect('admin/usuario');
    }

    public function destroy($id)
    {

        $data = User::find($id);
        $data->delete();

        return redirect('admin/usuario');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
        // $this->guard()->logout();Request $request

        // $request->session()->invalidate();

        // return $this->loggedOut($request) ?: redirect('admin.login');
    }
}
