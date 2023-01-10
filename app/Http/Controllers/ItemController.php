<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //

    public function item(){
        $items = Item::all()->groupBy('category_id');
        $categories=Category::all();

        return view('detail',compact('categories','items'));
    }
    
    public function result(){
        $items = Item::all()->groupBy('category_id');
        $categories=Category::all();

        return view('categoryResult',compact('categories','items'));
    }


}
