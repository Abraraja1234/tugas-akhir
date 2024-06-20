<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Import model Cart

class CartController extends Controller
{
    public function index()
{
    // Retrieve user's cart items
    $cartItems = auth()->user()->carts;

    // Return view with cart items
    return view('carts.index', compact('cartItems'));
}


    public function store(Request $request)
    {
        $user = auth()->user();

        $cartItem = $user->carts()->where('product_id', $request->product_id)->first();

        if ($cartItem) {
            // Increase quantity if product already exists in cart
            $cartItem->update([
                'quantity' => $cartItem->quantity + $request->quantity
            ]);
        } else {
            // Add new item to cart
            $user->carts()->create([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->route('carts.index')->with('success', 'Product added to cart.');
    }

    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('carts.index')->with('success', 'Product removed from cart.');
    }

    public function showCart()
    {
        // Ambil semua item di keranjang
        $cartItems = CartItem::with('product')->get();
        return view('cart', compact('cartItems'));
    }
}
