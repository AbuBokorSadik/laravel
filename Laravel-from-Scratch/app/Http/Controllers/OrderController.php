<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\CartService;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        $this->middleware('auth');
    }

    public function create()
    {
       $cart = $this->cartService->getFromCookie();
       
       if(!isset($cart) || $cart->products->isEmpty()){
           return redirect()->back()->withErrors('Your Cart is empty');
       }

       return view('orders.create')->with([
           'cart' => $cart
       ]);
       
    }

    public function store(Request $request)
    {
        $user =$request->user();

        $order = $user->orders()->create([
            'status' => 'pending',
        ]);

        $cart = $this->cartService->getFromCookie();

        $cartProductsWithQuantity = $cart->products->mapWithKeys(function($product){
            $element[$product->id] = ['quantity' => $product->pivot->quantity];
            return $element;
        });

        // dd($cartProductsWithQuantity);
        // dd($cartProductsWithQuantity->toArray());

        $order->products()->attach($cartProductsWithQuantity->toArray());

        return redirect()->route('orders.payments.create', ['order' => $order->id]);
        
    }

}
