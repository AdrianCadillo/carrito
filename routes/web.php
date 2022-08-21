<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/tienda",[ProductosController::class,'index'])->name("tienda.index");
Route::post("/cestaadd",[cartController::class,'addCarts'])->name("tienda.addcesta");


Route::get("/carrito",[cartController::class,'index'])->name("carrito");

Route::posT("/removeitem",[cartController::class,'removeItemCarro'])->name("tienda.item.remove");


Route::posT("/clearcarrito",[cartController::class,'clear'])->name("tienda.clear");

Route::post("/update",[cartController::class,'updates'])->name("updates");