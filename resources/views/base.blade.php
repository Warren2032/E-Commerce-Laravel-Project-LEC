<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        @livewire('header-search-component')

        <div class="wrap-icon right-section">
            <div class="wrap-icon-section wishlist">
                <a href="#" class="link-direction">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <div class="left-info">
                        @if(Cart::instance('wishlist')->count() > 0)
                        <span class="index">{{Cart::instance('wishlist')->count()}} item</span>
                        @endif
                        <span class="title">Wishlist</span>
                    </div>
                </a>
            </div>
            <div class="wrap-icon-section minicart">
                <a href="#" class="link-direction">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    <div class="left-info">
                        @if (Cart::instance('cart')->count() > 0)
                            <span class="index">{{Cart::instance('cart')->count()}} items</span>
                        @endif
                            <span class="title">Cart</span>
                    </div>
                </a>
            </div>
        </div>

        <div class= "wrap-search center-section">
            <div class="wrap-search-form">
                <form action="#" id="form-search-top" name="form-search-top">
                    <input type="text" name="search" value="" placeholder="Search here...">
                    <button form="form-search-top" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <div class="list-cate">
                        <input type="hidden" name="product_cat" value="{{$product_cat}}" id="product-cate">
                        <input type="hidden" name="product_cat_id" value="{{$product_cat_id}}" id="product-cate">
                        <a href="#" class="link-control">{{str_split($product_cat,12)[0]}}</a>
                        <ul class="list-cate">
                            <li class="level-0">All Category</li>
                            @foreach ($categories as $category)
                                <li class="level-1">{{$category->name}}</li>
                            @endforeach

                            <li class="level-1">-Electronics</li>
                            <li class="level-2">Batteries & Chargers</li>
                            <li class="level-2">Headphone & Headsets</li>
                            <li class="level-2">MP3 Player & Accessories</li>
                            <li class="level-1">-Smartphone & Tablet</li>
                            <li class="level-2">Batteries & Chargers</li>
                            <li class="level-2">MP3 Players & Headphones</li>
                            <li class="level-2">Tablet & Accessories</li>
                            <li class="level-1">-Electronics</li>
                            <li class="level-2">Batteries & Chargers</li>
                            <li class="level-2">Headphone & Headsets</li>
                            <li class="level-2">MP3 Player & Accessories</li>
                            <li class="level-1">-Smartphone & Tablet</li>
                            <li class="level-2">Batteries & Chargers</li>
                            <li class="level-2">MP3 Player & Headphones</li>
                            <li class="level-2">Table & Accessories</li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>