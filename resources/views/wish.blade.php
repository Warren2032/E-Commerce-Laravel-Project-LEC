@extends('layouts.app')

@section('content')

@foreach($wish_item as $item)
<a class="col text-decoration-none d-flex flex-column" href="{{route('detail',$item['product_id'])}}" >
    <img class="cont-img" src="{{Storage::url($item['photo'])}}" alt="Responsive image">
    <div class="position-sticky top-100">
        <div class="row">
            <span class="d-inline-block text-truncate" style="max-width:300px; ">{{$item['name']}} </span>
            <span >{{'IDR. '.number_format($item['price'], 2, '.', ',')}}</span>
        </div>
        <form action="{{route('addCart')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary mx-5">Add to Cart</button>

            <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
            <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
            <input type="hidden"  id="photo" name="photo" value="{{$item['photo']}}">
            <input type="hidden"  id="price" name="price" value="{{$item['price']}}">
            <input type="hidden"  id="name" name="name" value="{{$item['name']}}">
            @if (\Session::has('success1'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success1') !!}</li>
                    </ul>
                </div>
            @endif
        </form>
        <form action="{{ route('wish.destroy', $item->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" id="button1">Delete</button>
        </form>
    </div>
</a>
@endforeach
@endsection
