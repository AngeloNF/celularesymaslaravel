<?php

namespace App\Http\Controllers;

use App\Models\Caracteristicas;
use App\Models\categorias;
use App\Models\productos;
use Auth;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Ramsey\Collection\Collection;
use Storage;

class DatosController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulo = new productos;


        $articulo->name = $request->id;
        $articulo->precio = $request->precio;
        $articulo->categoria_id = $request->categoria;

        $file = $request->file('imagen');

        $extension = $file->getClientOriginalExtension();
        $name = $request->id;

        $articulo->imagenURL = "Imagenes Celulares/" . categorias::find($request->categoria)->name . "/" . $name . "." . $extension;
        $caracteristicas = [];
        foreach (explode("\n", $request->caracteristicas) as $key => $value) {

            $caracteristicas[] = new Caracteristicas(["descripcion" => $value]);
        }
       
        $file->storeAs("public/Imagenes Celulares/" . categorias::find($request->categoria)->name, $name . "." . $extension);
        $articulo->save();
        $articulo->Caracteristicas()->saveMany($caracteristicas);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $articulo = productos::where('id', $id)->first();
        return view("show", ["articulo" => $articulo, "key" => $id]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = productos::find($id);
        unlink(public_path()."/storage/".$producto->imagenURL);
        $producto->Caracteristicas()->delete();
        $producto->delete();

        return redirect("/");
    }
}