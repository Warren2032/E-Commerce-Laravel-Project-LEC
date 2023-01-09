<!doctype html>
<html lang="en">
    <style>
        .product-wish{
            position: absolute;
            top: 10%;
            left: 0;
            z-index: 99;
            right: 30px;
            text-align:right;
            padding-top: 0;
        }
        .product-wish.fa{
            color: #cbcbcb;
        }
    </style>
    <div class= "row">
        <ul class= "product-list grid-products equal-container">
            @foreach ($products as $product)
            <li class= "col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <div class= "product product-style-3 equal-elem">
                    <div class= "product-thumnail">
                        <a href= "{{route('product.details',['slug'=>$product->slug])}}" title= "{{$product->name}}">
                            <figure><img src="{{asset('assets/images/products')}}/{{$product->image}}">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"></a>
                        <div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product}}')"
                        <div class="product-wish">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</html>