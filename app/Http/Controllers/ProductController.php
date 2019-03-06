<?php

namespace App\Http\Controllers;
use App\Tour;
use App\Cart;
use Illuminate\Http\Request;
use Session;
class ProductController extends Controller
{
    
    public function getAddToCart(Request $request, $id)
    {

    	$producto =Tour::find($id);
    	$oldCart = Session:: has('cart') ? Session::get('cart') : null;

    	$cart = new Cart($oldCart);
          
    	$cart->add($producto,$producto->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->back()->with('error', 'Something went wrong.');

    }

    public function getCart()
    {
    	
    
		$idioma="es";
    	if(!Session:: has('cart')){

    		    return view("assets.pagina.".$idioma.".shopping",['products' => null]);
    	}

    	$oldCart =Session::get('cart');
    	$cart = new Cart($oldCart);

    	 return view("assets.pagina.".$idioma.".shopping",['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    public function getCheckout()
    {
    	
    
    	$idioma="es";

    	if(!Session::has('cart'))
    	{
    		return redirect()->back()->with('error', 'Something went wrong.');
    	}
    	

    	$oldCart =Session::get('cart');
    	$cart = new Cart($oldCart);
    	$total = $cart->totalPrice;



    	return view("assets.pagina.".$idioma.".checkout",['total' => $total]);

    }

    public function postCheckout(Request $request)
    {
    		dd($request->all());
    }
}
