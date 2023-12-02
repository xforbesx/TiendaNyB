<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function add(Request $request){
        $producto = Product::find($request->id);
        if(empty($producto))
            return redirect('/');

        Cart::add(
            $producto->id,
            $producto->name,
            1,
            $producto->price,
        );
        return redirect()->back()->with("success","Item agregado: ". $producto->name);
    }

    public function checkout(){
        return view('cart');
    }

    public function removeItem(Request $request){
        Cart::remove($request->rowId);
        return redirect()->back()->with("success","Item eliminado!");
    }

    public function clear(){
        Cart::destroy();
        return redirect()->back()->with("success","Carrito vacio!");
    }
}
