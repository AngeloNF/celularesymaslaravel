<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;
use Route;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("categorias.index", [
            "categorias" => categorias::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            "categorias.create",
            [
                "categorias" => categorias::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (categorias::where("name", "like", $request->name . "%")->first() == null) {

            $categoria = new categorias();
            $categoria->name = $request->name;
            $categoria->save();
        }
        return redirect(route("categoria.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $categorias)
    {
        return view(
            "index",
            [
                "productos" => categorias::where("name", "like", $categorias)->first()->productos,
                "categorias" => categorias::all(),
                "nombreCategoria" => $categorias
            ]
        );
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = categorias::find($id);
        try {
            $categoria->delete();
            return redirect(route("categoria.index"));
        } catch (\Throwable $th) {
            return back()->with("error","La categoria no debe tener productos para poder eliminarla, cambie o elimine los productos con la categoria que desea eliminar.");
        }
    }
}