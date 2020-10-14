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
        return view('home');
    }


    public function user()
    {
        $users = User::all();
        return view('admin.usuario', compact('users'));
    }

    public function create(Request $request)  
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);
        User::create($request->all());
        return redirect()->route('admin.user');
    }

    public function update(Request $request, User $user)
    {
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);

        $user->update($request->all());
        return redirect()->route('admin.user');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user');
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
