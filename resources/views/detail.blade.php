@extends('layouts.app')

@section('content')
    <div class="container text-justify border rounded-1 shadow my-5">
        <div class="clearfix">
          <img src="{{Storage::url($item['photo'])}}" class="col-md-6 float-md-start mb-5 ms-md-1 my-3 border border rounded-1" alt="...">

          <div class="card border-0" style="width: 30rem; height: 30rem">
            <div class="card-body bg">
                {{-- <p class="card-text">amounts sold : amounts here</p> --}}
                <p class="card-text text-center fw-semibold">Name : {{$item['name']}}</p>
                <p class="card-text">Description : {{$item['desc']}}</p>
                {{-- <p class="card-text my-5">material : material here</p>
                <p class="card-text my-5">sizing : sizing here</p>
                <p class="card-text my-5">colors and stocks available : lists here</p> --}}
                <br>
                <p class="card-text my-5">Price : {{$item['price']}}</p>
                <br>

                <div class="container justify-content-evenly my-5">
                    <a href="/cart" class="btn btn-primary mx-5">Add to cart</a>
                    <a href="/cart" class="btn btn-success">Add to wishlist</a>
                </div>
            </div>
        </div>
        </div>
      </div>

    </div>
@endsection
