<?php

namespace App\Http\Controllers;

use App\Models\wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    public function addWish(Request $request)
    {
        $wish = new Wish([
            'user_id' => $request->get('user_id'),
            'product_id' => $request->get('item_id'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'photo' => $request->get('photo')
        ]);
        $wish->save();

        return redirect()->back()->with('success2', 'Successfully added to wishlist');
    }

    public function show()
    {
        $wish_item = Wish::all()->where('user_id', Auth::user()->id);
        $count = count($wish_item);
        return view('wish', compact('wish_item', 'count'));
    }

    public function destroy($id)
    {
        $wish_item = Wish::find($id);
        $wish_item->delete();

        $wish_item = Wish::all()->where('user_id', Auth::user()->id);
        $count = count($wish_item);
        return view('wish', compact('wish_item', 'count'));
    }
}
