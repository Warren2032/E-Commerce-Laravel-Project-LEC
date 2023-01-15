@extends('layouts.app')

@section('content')
    <div class="container text-justify border rounded-1 shadow my-5 bg-light">
        <div class="clearfix">
          <img src="{{Storage::url($item['photo'])}}" class="col-md-6 float-md-start mb-5 ms-md-1 my-3 border border rounded-1" alt="...">

          <div class="card border-0" style="width: 40rem; height: 30rem">
            <div class="card-body bg-light">
                <p class="card-text text-center fw-semibold">Name : {{$item['name']}}</p>
                <p class="card-text">Description : {{$item['desc']}}</p>
                <br>
                <p class="card-text my-5">Price : {{$item['price']}}</p>
                <br>

                <div class="row justify-content-evenly my-5 mx-5">
                    @if(Auth::check())
                    <div class="col-1" style="width: 15rem; height: 0rem">
                        <form action="{{route('addCart')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
    
                            <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
                            <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
                            <input type="hidden"  id="photo" name="photo" value="{{$item['photo']}}">
                            <input type="hidden"  id="price" name="price" value="{{$item['price']}}">
                            <input type="hidden"  id="name" name="name" value="{{$item['name']}}">
                            @if (\Session::has('success1'))
                                <div class="alert alert-success my-5">
                                    <ul>
                                        <li>{!! \Session::get('success1') !!}</li>
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                    
                    <div class="col-2" style="width: 15rem; height: 0rem">
                        <form action="{{route('addWish')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Add to Wishlist</button>
    
                            <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
                            <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
                            <input type="hidden"  id="photo" name="photo" value="{{$item['photo']}}">
                            <input type="hidden"  id="price" name="price" value="{{$item['price']}}">
                            <input type="hidden"  id="name" name="name" value="{{$item['name']}}">
                            @if (\Session::has('success2'))
                                <div class="alert alert-success my-5">
                                    <ul>
                                        <li>{!! \Session::get('success2') !!}</li>
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
@endsection
