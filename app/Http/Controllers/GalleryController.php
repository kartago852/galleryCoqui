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
        if ($request) {
            $query = trim($request->get('search'));

            $imagenes= Imagen::where('nombre', 'LIKE', '%' .$query .'%')->orderBy('id','asc')->paginate(5);

            return view('galeria.index', ['categorias' => Categorias::all(), 'imagenes' => $imagenes, 'search' => $query]);
        }

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
