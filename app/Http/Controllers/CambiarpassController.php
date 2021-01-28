<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CambiarpassController extends Controller
{

    public function update(Request $request, $id)
    {
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);
        $Contraseña = User::findOrFail($id);
        $Contraseña->password = $request->password;
        $Contraseña->save();
        return back()->with('Pageedit', 'Se cambio tu contraseña');
    }
}
