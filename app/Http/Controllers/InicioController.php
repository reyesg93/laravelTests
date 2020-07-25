<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Session;

use App\ConfigCart as Cart;

class InicioController extends Controller
{
    public function inicio()
    {
        $productos = Product::paginate(24);
        return view('inicio', compact('productos'));
    }

    public function addCart(Request $request, $id)
    {
        $producto = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($producto, $producto->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('/');
    }

    public function getShopingCart()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        return view('form-cart')->with(['items' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
