<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DatosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DatosController::class, "index"])->name("inicio");

Route::resource('producto', DatosController::class)->except(["index"])->middleware("auth");

Route::get("categoria/{name}", [CategoriasController::class, "index"])->name("categoria");