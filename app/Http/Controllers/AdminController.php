<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Imagen;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $imagenes = Imagen::all();
            return response()->json($imagenes,200);

        }
        $query = trim($request->get('search'));
        $imagenes = Imagen::where('nombre', 'LIKE', '%' .$query .'%')->orderBy('id','asc')->paginate(10);

        return view('admin.index',['categorias' => Categorias::all(), 'imagenes' => $imagenes]);
        /* if ($request) {

            $query = trim($request->get('search'));
            $imagenes = Imagen::where('nombre', 'LIKE', '%' .$query .'%')->orderBy('id','asc')->paginate(10);
            return view('admin.index',['categorias' => Categorias::all(), 'imagenes' => $imagenes]);
        } */
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('admin.modal-edit', ['imagen' => Imagen::findOrFail($id)]);
        /* dd($id); */

        /* return $id=Imagen::findOrFail($id); */
    }


    public function update(Request $request, $id)
    {
        $imagen = Imagen::findOrFail($id);

        $imagen->nombre = $request->get('nombre');
        $imagen->imagen = $request->get('imagen');
        $imagen->categoria_nombre = $request->get('categoria');
        $imagen->update();

        return redirect('/admin');
    }


    public function destroy($id)
    {

        $imagen = Imagen::findOrFail($id);

        $imagen->delete();

        return redirect('/admin');
    }
}