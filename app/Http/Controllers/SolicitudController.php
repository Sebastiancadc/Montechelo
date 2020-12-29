<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitudRequest;
use App\Pausasactivas;
use Illuminate\Http\Request;
use App\Solicitud;
use App\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use AppExportPdfs;

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
        $solicitudes = DB::table('solicitud')->count();
        $desarollo = DB::table('solicitud')->wherearea_trabajo('Desarrollo')->count();
        $talentohumano = DB::table('solicitud')->wherearea_trabajo('talento humano')->count();
        $recursoshumanos = DB::table('solicitud')->wherearea_trabajo('recursos humanos')->count();
        $produccion = DB::table('solicitud')->wherearea_trabajo('produccion')->count();
        $vacaciones = DB::table('solicitud')->wheretipo_solicitud('vacaciones')->count();
        $pagos = DB::table('solicitud')->wheretipo_solicitud('desprendibles de pago')->count();
        $pendientes = DB::table('solicitud')->whereestado_solicitud('pendiente')->count();
        $revisado = DB::table('solicitud')->whereestado_solicitud('revisado')->count();
        return view('admin.solicitud.solicitud', compact(
            'solicitud',
            'solicitudes',
            'desarollo',
            'talentohumano',
            'recursoshumanos',
            'produccion',
            'pendientes',
            'revisado',
            'vacaciones',
            'pagos'
        ));
    }
    public function soli()
    {
        $pausasramdom = Pausasactivas::select('video')
            ->inRandomOrder()
            ->first();
        return view('admin.solicitud.solicitudes',compact('pausasramdom'));
    }

    public function store(SolicitudRequest $request)
    {
        Solicitud::create($request->all());
        return redirect()->action('SolicitudController@index')->with('crearsolicitudes', 'Solicitud creada exitosamente.');
    }


    public function crearsolicitud()
    {
        $pausasramdom = Pausasactivas::select('video')
            ->inRandomOrder()
            ->first();

        return view('admin.solicitud.crearsolicitud', compact('pausasramdom'));
    }

    public function crearsolicitudes(SolicitudRequest $request)
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
        return redirect('admin/solicitud')->with('eliminar', 'La solicitud se eliminó correctamente.');
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
            'telefono' => ['required', 'decimal', 'min:1', 'max:12'],
            'area_trabajo' => ['required', 'string', 'max:30'],
            'estado_solicitud' => ['string', 'max:30'],
            'status' => ['int', 'max:4'],
        ]);
    }



    public function createPDF()
    {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('user', $data);
        $pdf = PDF::loadView('admin.solicitud.pdf', $data);

        // download PDF file with download method
        return $pdf->download('Certificado Laboral.pdf');
    }

    public function storagePDF()
    {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('user', $data);
        $pdf = PDF::loadView('admin.solicitud.pdf2', $data);

        // download PDF file with download method
        return $pdf->download('Certificado De Nomina.pdf');
    }
}
