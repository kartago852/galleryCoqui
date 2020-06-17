<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Imagen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ImagenFormRequest;

class GalleryController extends Controller
{

    public function index(Request $request)
    {
        $query = trim($request->get('search'));

        $categorias = Categorias::all();

        //$imagenes= Imagen::where('nombre', 'LIKE', '%' .$query .'%')->orderBy('id','asc')->paginate(5);

        $imagenes= Imagen::orderBy('id','asc')->paginate(5);

        if ($request->ajax()) {

            /* return response()->json(view('galeria.imagenes',compact('categorias','imagenes'))->render()); */
            return view('galeria.imagenes',compact('categorias','imagenes'))->render();
        }

        return view('galeria.index',compact('categorias','imagenes'));

    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
        ]);

        $categoria = new Categorias();

        $categoria->nombre = request('nombre');

        $categoria->save();

        return redirect('admin')->with('success', 'Fue Creado Con exito');

    }

    public function guardarImangen(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'imagen' => 'required',

        ]);

        $file = $request->file('imagen');

        if ($file != "" && $request->hasFile('imagen')) {
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $imagen = new Imagen();

        $imagen->nombre = request('nombre');
        $imagen->imagen =  $name;
        $imagen->categoria_nombre = request('categoria');
        $imagen->save();

        /* dd($imagen); */

        return redirect('admin')->with('success', 'Fue Creado Con exito');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
