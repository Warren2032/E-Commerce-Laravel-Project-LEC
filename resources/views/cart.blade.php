@extends('layouts.app')

@section('content')
<div class="container text-justify border rounded-1 shadow my-5 bg-light">
    @foreach($cart_item as $item)
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
                                <form action="{{ route('cart.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" id="button1">Delete</button>
                                </form>
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

    <p class="fw-semibold mt-3">Total Price : </p>
    <button class="btn btn-primary mb-3 mt-3">Purchase Now</button>
</div>
@endsection
