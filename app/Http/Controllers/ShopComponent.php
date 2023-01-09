<?php

namespace App\Http\Controller;
use Livewire\Component;
use Cart;
use App\Models\Category;

class ShopComponent extends Component {
    public $max_price;
    public $min_price;

    public function mount(){
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->min_price = 1;
        $this->max_price = 1000;
    }

    public function store($product_id, $product_name, $product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route(product.cart);
    }

    public function addToWishlist($product_id, $product_name, $product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
    }
}