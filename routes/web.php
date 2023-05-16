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


Route::resource('categoria', CategoriasController::class)->except(["index","show"])->middleware("auth");
Route::resource('categoria', CategoriasController::class)->only(["index","show"]);
Route::resource('producto', DatosController::class)->except(["index"])->middleware("auth");
