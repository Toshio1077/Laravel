<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{   public function index()
    {
        return view('cart');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'goods_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        Cart::create($validatedData);

        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully.');
    }

    
}