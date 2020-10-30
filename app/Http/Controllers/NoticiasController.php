<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use Redirect;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $noticia = Noticia::paginate(4);
        return view('admin.noticias.index',compact('noticia'));
    }
    public function index2()
    {
        $noticias = Noticia::paginate(6);
        return view('admin.noticia',compact('noticias'));
    }

    public function crearnoticia()
    {
        $user = User::find(Auth::User()->id_Usuario);
        $categoria = Category::all();
        return view('admin/crearnoticia',compact('categoria','user'));
    }
    public function crearnoticias()
    {
       $user = User::find(Auth::User()->id_Usuario);
       $categoria = Category::all();
       return view('admin.crearnoticia',compact('categoria','user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'title' => 'required',
          'body' => 'required',
          //'image' =>'mimes:.jpeg,.bmp,.png,.jpg,.gif,.PNG,.JPG|max:2000',

         ];

        $messages = [
          'title.required' =>'Es obligatorio un título para la publicación',
          'body.required' =>'Es obligatorio un contenido para la publicación',
          //'image.mimes' =>'El archivo debe  corresponder a un formato de imagen',
          'image.max' =>'La imagen no debe ser mayor que 2 mb.'


        ];
         $this->validate($request, $rules, $messages);

         $noticia = new Noticia($request->all());
         $noticia->slug = Str::slug($request->title);
         $noticia->save();


         if ($request->file('image')) {
            $nombre = Storage::disk('imaposts')->put('imagenes/posts', $request->file('image'));
            $noticia->fill(['image' => asset($nombre)])->save();
         }
          Session::flash('message','Publicación creada correctamente');
          return redirect()->action('NoticiasController@index2')->with('crearnoticia', 'Noticia publicada correctamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticiaActualizar = Noticia::findOrFail($id);
        // $categoria = Category::all();
        return view('admin/noticias/edit',compact('noticiaActualizar'));    
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
            $noticia->slug =  Str::slug($request->titulo);
            $noticia->update($request->all());

           if($request->file('image')){
            $nombre = Storage::disk('imaposts')->put('plantilla/img/noticia',  $request->file('image'));
            $noticia->fill(['image' => asset($nombre)])->save();
          }

           Session::flash('message','Publicación actualizada correctamente');
          return redirect()->route('admin/solicitud');
    }
    public function post($slug)
    {
        $noticia= Noticia::where('slug',$slug)->first();
    	return view('admin.post',compact('noticia'));
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
