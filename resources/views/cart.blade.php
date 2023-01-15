@extends('layouts.app')

@section('content')
@foreach($cart_item as $item)
<a class="col text-decoration-none d-flex flex-column" href="{{route('detail',$item['product_id'])}}" >
    <img class="cont-img" src="{{Storage::url($item['photo'])}}" alt="Responsive image">
    <div class="position-sticky top-100">
        <div class="row">
            <span class="d-inline-block text-truncate" style="max-width:300px; ">{{$item['name']}} </span>
            <span >{{'IDR. '.number_format($item['price'], 2, '.', ',')}}</span>
        </div>
        <form action="{{ route('cart.destroy', $item->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" id="button1">Delete</button>
        </form>
    </div>
</a>
@endforeach
@endsection
