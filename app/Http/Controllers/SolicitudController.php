<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use Illuminate\Support\Facades\Auth;


class SolicitudController extends Controller
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
        $solicitud =Solicitud::paginate(4);
        return view('admin.solicitud', compact('solicitud'));
    }

    public function store(Request $request)
    {
        Solicitud::create($request->all());
        return redirect('admin/solicitud');
    }


    public function crearsolicitud()
    {
        return view('admin/crearsolicitud');
    }

    public function crearsolicitudes(Request $request)
    {
        Solicitud::create($request->all());
        return view('admin/crearsolicitud')->with('crearsolicitudes','La solicitud fue enviada exitosamente.');
    }


    public function edit($id)
    {
        $solicitudActualizar = Solicitud::findOrFail($id);
        return view('admin/solicitud/editarsolicitud',compact('solicitudActualizar'));
    }

    public function update(Request $request, $id)
    {
        $solicitudUpdate = Solicitud::findOrFail($id);
        $solicitudUpdate->estado_solicitud = $request->estado_solicitud;
        $solicitudUpdate->save();
        return redirect('admin/solicitud')->with('update','El estado de la solicitud se actualizó correctamente.');
    }


    public function destroy($id)
    {
        $data = Solicitud::findOrFail($id);
        $data->delete();
        return redirect('admin/solicitud')->with('eliminar','La solicitud se eliminó.');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}


