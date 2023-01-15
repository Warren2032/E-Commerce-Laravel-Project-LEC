@extends('layouts.app')

@section('content')
<div class="container text-justify border rounded-1 shadow my-5 bg-light">
    @foreach($wish_item as $item)
    <a class="col text-decoration-none d-flex flex-column" href="{{route('detail',$item['product_id'])}}" >
        {{-- <div class="clearfix"> --}}
            <div class="card mb-3 mt-3 border shadow">
                <div class="card-header">{{$item['name']}}</div>
                <div class="clearfix">
                    <div class="card-body bg-light rounded-1">
                        <div class="row">
                            <div class="col">
                                <img class="rounded-1 img-align left float-left" src="{{Storage::url($item['photo'])}}" alt="Responsive image" style="max-inline-size: 30%">
                                {{-- <img class="cont-img" src="{{Storage::url($item['photo'])}}" alt="Responsive image" style=""> --}}
                            </div>

                            <div class="col">
                                <div class="card-body bg-light rounded-1">
                                    <span class="text-center">{{'IDR. '.number_format($item['price'], 2, '.', ',')}}</span>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('wish.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" id="button1">Delete</button>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <form action="{{route('addCart')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Add to Cart</button>

                                            <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
                                            <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
                                            <input type="hidden"  id="photo" name="photo" value="{{$item['photo']}}">
                                            <input type="hidden"  id="price" name="price" value="{{$item['price']}}">
                                            <input type="hidden"  id="name" name="name" value="{{$item['name']}}">
                                        </form>
                                    </div>
                                </div>

                                <div class="position-sticky top-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </a>
    @endforeach

    @if ($wish_item->isEmpty())
    <p class="fw-semibold mt-3">Wishlist is Empty!</p>
    @else
    <p class="fw-semibold mt-3">Total Items : {{$count}} </p>
    @if (\Session::has('success1'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success1') !!}</li>
        </ul>
    </div>
@endif
    @endif

</div>
@endsection
