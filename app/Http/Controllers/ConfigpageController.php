<?php

namespace App\Http\Controllers;

use App\Configpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ConfigpageController extends Controller
{
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
}