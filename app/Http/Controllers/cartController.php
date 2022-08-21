<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Auth;
use Illuminate\Http\Request;
use Cart;
class cartController extends Controller
{
    

public function addCarts(){
$producto = Productos::find(request()->idprod);
Cart::add(
    array(

        'id' => $producto->id_producto,

        'price' => $producto->precio,

        'quantity' => 1,
        "name"=>$producto->descripcion
)
    );
    return back();
}

public function index(){
    return view("carrito.carro");
}

public function removeItemCarro(){
    Cart::remove([
        'id'=>request()->idprod
    ]);
    return back();
   
}

public function clear(){
    Cart::clear();
    return back();
}

public function updates(){
if(request()->ok=="mas"){
    Cart::update(request()->id,array(
        'quantity' => 1   
    ));
        return back();
}else{
 
    Cart::update(request()->id,array(
        'quantity' => -1   
    ));
        return back();   
 
}
}
}
