@extends('layouts.app')

@section('content')
    <div class="container text-justify border rounded-1 shadow my-5">
        <div class="clearfix">
          <img src="{{Storage::url($item['photo'])}}" class="col-md-6 float-md-start mb-5 ms-md-1 my-3 border border rounded-1" alt="...">

          <div class="card border-0" style="width: 30rem; height: 30rem">
            <div class="card-body bg">
                <p class="card-text text-center fw-semibold">Name : {{$item['name']}}</p>
                <p class="card-text">Description : {{$item['desc']}}</p>
                <br>
                <p class="card-text my-5">Price : {{$item['price']}}</p>
                <br>

                <div class="container justify-content-evenly my-5">

                    @if(Auth::check())
                    <form action="{{route('addWish')}}" method="POST">
                        @csrf
                        <a href="/cart" class="btn btn-primary mx-5">Add to cart</a>

                        <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
                        <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
                        <input type="hidden"  id="photo" name="photo" value="{{$item['photo']}}">
                        <input type="hidden"  id="price" name="price" value="{{$item['price']}}">
                        <input type="hidden"  id="name" name="name" value="{{$item['name']}}">
                        @if (\Session::has('success1'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                    </form>
                    <form action="{{route('addWish')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Add to Wishlist</button>

                        <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
                        <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
                        <input type="hidden"  id="photo" name="photo" value="{{$item['photo']}}">
                        <input type="hidden"  id="price" name="price" value="{{$item['price']}}">
                        <input type="hidden"  id="name" name="name" value="{{$item['name']}}">
                        @if (\Session::has('success2'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success2') !!}</li>
                                </ul>
                            </div>
                        @endif
                    </form>
                    @endif
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
@endsection
