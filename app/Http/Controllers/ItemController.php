<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //
    public function item($id){
        $item = Item::find($id);
        return view('detail',compact('item'));
    }

    public function result($id){
        $category = Category::find($id);
        $items = $category->items()->paginate(10);

        dump($items);
        //return view ('categoryResult',compact('items','category'));
    }

    public function wishResult($id){

        $items = Item::find($id);

        //dump($items);
        return view ('wish',compact('items'));
    }
}

