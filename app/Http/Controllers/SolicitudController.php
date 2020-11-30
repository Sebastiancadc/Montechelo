<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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
        $solicitud = Solicitud::paginate(4);
        return view('admin.solicitudes', compact('solicitud'));
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
        return redirect()->action('SolicitudController@crearsolicitud')->with('crearsolicitudes', 'La solicitud fue enviada exitosamente.');
    }


    public function edit($id)
    {
        $solicitudActualizar = Solicitud::findOrFail($id);
        return view('admin/solicitud/editarsolicitud', compact('solicitudActualizar'));
    }

    public function update(Request $request, $id)
    {
        $solicitudUpdate = Solicitud::findOrFail($id);
        $solicitudUpdate->estado_solicitud = $request->estado_solicitud;
        $solicitudUpdate->save();
        return redirect('admin/solicitud')->with('update', 'El estado de la solicitud se actualizó correctamente.');
    }


    public function destroy($id)
    {
        $data = Solicitud::findOrFail($id);
        $data->delete();
        return redirect('admin/solicitud')->with('eliminar', 'La solicitud se eliminó.');
    }

    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
    public function validator(array $data)
    {
        return Validator::make($data, [
        'tipo_solicitud' => ['required', 'string', 'max:30'],
        'nombre' => ['required', 'string', 'max:30'],
        'apellido' => ['required', 'string', 'max:30'],
        'fecha' => ['required', 'date'],
        'cedula' => ['required', 'int', 'max:10'],
        'telefono' => ['required', 'decimal','min:1', 'max:12'],
        'area_trabajo' => ['required', 'string', 'max:30'],
        'estado_solicitud' => ['string', 'max:30'],
        'status' => ['int', 'max:4'],]);
    }
    public function createPDF() {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('user',$data);
        $pdf = PDF::loadView('admin.solicitud.pdf', $data);

        // download PDF file with download method
        return $pdf->download('certificado.pdf');
      }
      public function storagePDF() {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('user',$data);
        $pdf = PDF::loadView('admin.solicitud.pdf2', $data);

        // download PDF file with download method
        return $pdf->download('certificado.pdf');
      } 
}
