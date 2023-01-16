<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $cart = new Cart([
            'user_id' => $request->get('user_id'),
            'product_id' => $request->get('item_id'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'photo' => $request->get('photo')
        ]);
        $cart->save();

        return redirect()->back()->with('success1', 'Successfully added to '. $request->get('name'). ' cart');
    }

    public function show()
    {
        $cart_item = Cart::all()->where('user_id', Auth::user()->id);
        $total = $cart_item->sum('price');
        return view('cart', compact('cart_item', 'total'));
    }

    public function destroy($id)
    {
        $cart_item = Cart::find($id);
        $cart_item->delete();
        $total = $cart_item->sum('price');
        $cart_item = Cart::all()->where('user_id', Auth::user()->id);
        return view('cart', compact('cart_item', 'total'));
    }

    public function destroyAll()
    {
        Cart::truncate();

        $cart_item = Cart::all()->where('user_id', Auth::user()->id);
        return view('cart', compact('cart_item'));
    }
}
