<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Auth;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

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
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__ . '/celulares-y-mas-cd772-firebase-adminsdk-qvte6-9f21b37d57.json')
            ->withDatabaseUri('https://celulares-y-mas-cd772-default-rtdb.firebaseio.com/');

        $database = $firebase->createDatabase();

        $datos = request()->all();

        $datos["id"] = ucfirst($datos["id"]);
        $file = $request->file('imagen');
        $extension = $file->getClientOriginalExtension();

        $datos["imagen"] = "Imagenes Celulares/" . $datos["categoria"] . "/" . $datos["id"] . "." . $extension;
        $datos["precio"] = "¢" . $datos["precio"];
        unset($datos["_token"]);


        $file->storeAs("public/Imagenes Celulares/" . $datos["categoria"], $datos["id"] . "." . $extension);
        $database->getReference('/')->push($datos);

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
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__ . '/celulares-y-mas-cd772-firebase-adminsdk-qvte6-9f21b37d57.json')
            ->withDatabaseUri('https://celulares-y-mas-cd772-default-rtdb.firebaseio.com/');

        $database = $firebase->createDatabase();
        $database->getReference("/" . $id)->remove();
        return redirect("/");
    }
}