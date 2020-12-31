<?php

namespace App\Http\Controllers;

use App\Configpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ConfigpageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {    
        $page = Configpage::findOrFail($id);
        
        return view('admin.configuracionweb.index',compact('page'));
    }

    public function update(Request $request, $id)
    {
        $configUpdate = Configpage::findOrFail($id);
        $configUpdate->colornavho = $request->colornavho;
        $configUpdate->colornavver = $request->colornavver;
        $configUpdate->colorbtnprimary = $request->colorbtnprimary;
        $configUpdate->colorbtndanger = $request->colorbtndanger;
        $configUpdate->colorbtnwarning = $request->colorbtnwarning;
        $configUpdate->colortitulo = $request->colortitulo;
        $configUpdate->colortexto = $request->colortexto;
        $configUpdate->textmision = $request->textmision;
        $configUpdate->textvision = $request->textvision;
        $configUpdate->textvalores = $request->textvalores;
        $configUpdate->textpolitica = $request->textpolitica;
        $configUpdate->textplanestr = $request->textplanestr;
        $configUpdate->textorganigrama = $request->textorganigrama;
        $configUpdate->textuniestra = $request->textuniestra;
        $configUpdate->save();
        return back()->with('Pageedit', 'Estilos editados correctamente');
    }

    public function updatePhoto(Request $request)
    {
        $this->validate($request, [
            'logoisotipo' => 'required|image'
        ]);

        $isotipo=Auth::user();
        $extension =$request->file('logoisotipo')->getClientOriginalExtension();
        $file_name = $isotipo->id. '.' .$extension;
        $path= public_path('images/isotipo/'.$file_name);

        Image::make($request->file('logoisotipo'))->fit(80,80)->save($path);
        $isotipo->logoisotipo = 'http://localhost/Montechelo/public/images/isotipo/'.$file_name;
        $isotipo->save();  
        $data['success'] =true;
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;   
    }
    public function updatePhotologin(Request $request)
    {
        $this->validate($request, [
            'logologin' => 'required|image'
        ]);

        $login=Auth::user();
        $extension =$request->file('logologin')->getClientOriginalExtension();
        $file_name = $login->id. '.' .$extension;
        $path= public_path('images/login/'.$file_name);

        Image::make($request->file('logologin'))->fit(80,80)->save($path);
        $login->logologin = 'http://localhost/Montechelo/public/images/login/'.$file_name;
        $login->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }

    public function updatePhotonavvertical(Request $request)
    {
        $this->validate($request, [
            'logonav' => 'required|image'
        ]);

        $nav=Auth::user();
        $extension =$request->file('logonav')->getClientOriginalExtension();
        $file_name = $nav->id. '.' .$extension;
        $path= public_path('images/navvertical/'.$file_name);

        Image::make($request->file('logonav'))->fit(200,70)->save($path);
        $nav->logonav = 'http://localhost/Montechelo/public/images/navvertical/'.$file_name;
        $nav->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }


    public function updatePhotomision(Request $request)
    {
        $this->validate($request, [
            'imagenmision' => 'required|image'
        ]);

        $mision=Auth::user();
        $extension =$request->file('imagenmision')->getClientOriginalExtension();
        $file_name = $mision->id. '.' .$extension;
        $path= public_path('images/plan/mision/'.$file_name);

        Image::make($request->file('imagenmision'))->fit(693,500)->save($path);
        $mision->imagenmision = 'http://localhost/Montechelo/public/images/plan/mision/'.$file_name;
        $mision->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }

    public function updatePhotovision(Request $request)
    {
        $this->validate($request, [
            'imagenvision' => 'required|image'
        ]);

        $vision=Auth::user();
        $extension =$request->file('imagenvision')->getClientOriginalExtension();
        $file_name = $vision->id. '.' .$extension;
        $path= public_path('images/plan/vision/'.$file_name);

        Image::make($request->file('imagenvision'))->fit(650,500)->save($path);
        $vision->imagenvision = 'http://localhost/Montechelo/public/images/plan/vision/'.$file_name;
        $vision->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }
    
    public function updatePhotovalores(Request $request)
    {
        $this->validate($request, [
            'imagenvalores' => 'required|image'
        ]);

        $valores=Auth::user();
        $extension =$request->file('imagenvalores')->getClientOriginalExtension();
        $file_name = $valores->id. '.' .$extension;
        $path= public_path('images/plan/valores/'.$file_name);

        Image::make($request->file('imagenvalores'))->fit(693,500)->save($path);
        $valores->imagenvalores= 'http://localhost/Montechelo/public/images/plan/valores/'.$file_name;
        $valores->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }

    public function updatePhotoaspolitica(Request $request)
    {
        $this->validate($request, [
            'imagenpolitica' => 'required|image'
        ]);
        
        $politica=Auth::user();
        $extension =$request->file('imagenpolitica')->getClientOriginalExtension();
        $file_name = $politica->id. '.' .$extension;
        $path= public_path('images/plan/politica/'.$file_name);

        Image::make($request->file('imagenpolitica'))->fit(650,500)->save($path);
        $politica->imagenpolitica = 'http://localhost/Montechelo/public/images/plan/politica/'.$file_name;
        $politica->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }
    public function updatePhotonplanestra(Request $request)
    {
        $this->validate($request, [
            'imagenplanestra' => 'required|image'
        ]);
        
        $planestra=Auth::user();
        $extension =$request->file('imagenplanestra')->getClientOriginalExtension();
        $file_name = $planestra->id. '.' .$extension;
        $path= public_path('images/plan/planestra/'.$file_name);

        Image::make($request->file('imagenplanestra'))->fit(693,500)->save($path);
        $planestra->imagenplanestra = 'http://localhost/Montechelo/public/images/plan/planestra/'.$file_name;
        $planestra->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }
    public function updatePhotonaimagenorganigrama(Request $request)
    {
        $this->validate($request, [
            'imagenorganigrama' => 'required|image'
        ]);
        
        $organigrama=Auth::user();
        $extension =$request->file('imagenorganigrama')->getClientOriginalExtension();
        $file_name = $organigrama->id. '.' .$extension;
        $path= public_path('images/plan/organigrama/'.$file_name);

        Image::make($request->file('imagenorganigrama'))->fit(650,500)->save($path);
        $organigrama->imagenorganigrama = 'http://localhost/Montechelo/public/images/plan/organigrama/'.$file_name;
        $organigrama->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }

    public function updatePhotouniestra(Request $request)
    {
        $this->validate($request, [
            'imagenuniestra' => 'required|image'
        ]);
        
        $uniestra=Auth::user();
        $extension =$request->file('imagenuniestra')->getClientOriginalExtension();
        $file_name = $uniestra->id. '.' .$extension;
        $path= public_path('images/plan/unidades/'.$file_name);

        Image::make($request->file('imagenuniestra'))->fit(693,500)->save($path);
        $uniestra->imagenuniestra = 'http://localhost/Montechelo/public/images/plan/unidades/'.$file_name;
        $uniestra->save();  
        $data['success'] =true; 
        $data['path'] = $path;
        $data['file_name']=$file_name;  
        return $data;
    }
    
    
}