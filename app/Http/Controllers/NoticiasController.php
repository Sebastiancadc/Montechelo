<?php

namespace App\Http\Controllers;

use App\Capacitaciones;
use Illuminate\Http\Request;
use App\Noticia;
use App\User;
use App\Category;
use App\Events\NoticiasEvent;
use App\Http\Requests\NoticiaRequest;
use App\Pausasactivas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Notifications\NoticiasNotification;
use Redirect;

class NoticiasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $noticia = Noticia::paginate(4);
        $noticiasRegistradas = DB::table('noticias')->count();
        $programacion = DB::table('noticias')->wherecategory_id(1)->count();
        return view('admin.noticias.index', compact('noticia','noticiasRegistradas','programacion'));
    }
    public function index2()
    {
        $noticias = Noticia::paginate(6);
        $pausasramdom = Pausasactivas::select('video')
        ->inRandomOrder() 
        ->first();

        return view('admin.noticias.noticia',compact('noticias','pausasramdom'));
    }
    public function talento()
    {
        $pausasramdom = Pausasactivas::select('video')
        ->inRandomOrder() 
        ->first();
        return view('admin.talentohumano.talento',compact('pausasramdom'));
    }

    public function crearnoticia()
    {
        $user = User::find(Auth::User()->id);
        $categoria = Category::all();
        return view('admin.noticias.crearnoticia',compact('categoria','user'));
    }
    public function crearnoticias()
    {
       $user = User::find(Auth::User()->id);
       $categoria = Category::all();
       return view('admin.crearnoticia',compact('categoria','user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaRequest $request)
    {

         $noticia = new Noticia($request->all());
         $noticia->slug = Str::slug($request->title);
         $noticia->save();


         if ($request->file('image')) {
            $nombre = Storage::disk('imaposts')->put('imagenes/posts', $request->file('image'));
            $noticia->fill(['image' => asset($nombre)])->save();
         }
        event(new NoticiasEvent($noticia));
          return redirect()->action('NoticiasController@index2')->with('crearnoticia', 'Noticia publicada correctamente');
    }
 
    public function edit($id)
    {
        $noticiaActualizar = Noticia::findOrFail($id);
        $categoria = Category::all();
        return view('admin/noticias/edit', compact('noticiaActualizar','categoria'));
    }
    public function editAd($id)
    {
        $noticiaActualizar = Noticia::findOrFail($id);
        $categoria = Category::all();
        return view('admin/noticias/editad', compact('noticiaActualizar','categoria'));
    }


    public function update(NoticiaRequest $request, $id)
    {
        $noticiaUpdate = Noticia::findOrFail($id);
        $noticiaUpdate->save();

        $rules = [
          'title' => 'required',
          'body' => 'required',
          'image' =>'mimes:jpeg,bmp,png,jpg,gif|max:2000',
         ];

        $messages = [
          'title.required' =>'Es obligatorio un título para la publicación',
          'body.required' =>'Es obligatorio un contenido para la publicación',
          'image.mimes' =>'El archivo debe  corresponder a un formato de imagen',
          'image.max' =>'La imagen no debe ser mayor que 2 mb.'
           ];
            $this->validate($request, $rules, $messages);

            $noticia = Noticia::find($id);
            $noticia->slug =  Str::slug($request->title);
            $noticia->update($request->all());

           if($request->file('image')){
            $nombre = Storage::disk('imaposts')->put('plantilla/img/noticia',  $request->file('image'));
            $noticia->fill(['image' => asset($nombre)])->save();
          }

           Session::flash('message','Publicación actualizada correctamente');
           return redirect()->action('NoticiasController@index')->with('editarnoticia', 'Noticia actualizada correctamente');
    }

    public function updateUs(NoticiaRequest $request, $id)
    {
        $noticiaUpdate = Noticia::findOrFail($id);
        $noticiaUpdate->save();

        $rules = [
          'title' => 'required',
          'body' => 'required',
          'image' =>'mimes:jpeg,bmp,png,jpg,gif|max:2000',
         ];

        $messages = [
          'title.required' =>'Es obligatorio un título para la publicación',
          'body.required' =>'Es obligatorio un contenido para la publicación',
          'image.mimes' =>'El archivo debe  corresponder a un formato de imagen',
          'image.max' =>'La imagen no debe ser mayor que 2 mb.'



           ];
            $this->validate($request, $rules, $messages);

            $noticia = Noticia::find($id);
            $noticia->slug =  Str::slug($request->title);
            $noticia->update($request->all());

           if($request->file('image')){
            $nombre = Storage::disk('imaposts')->put('plantilla/img/noticia',  $request->file('image'));
            $noticia->fill(['image' => asset($nombre)])->save();
          }

           Session::flash('message','Publicación actualizada correctamente');
           //return redirect()->action('NoticiasController@directee')->with('editarnoticia', 'Noticia actualizada correctamente');
           return back()->with('editarnoticia', 'Noticia actualizada correctamente');
    }

    public function post($slug)
    {
        $noticia= Noticia::where('slug',$slug)->first();
    	return view('admin.noticias.post',compact('noticia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        Session::flash('message','Publicación borrada  correctamente');
        return redirect()->action('NoticiasController@index')->with('eliminar','la noticia se elimino correctamente');
    }
    public function logout()
    {

        Auth::logout();

        return redirect('auth.login');
    }
}
