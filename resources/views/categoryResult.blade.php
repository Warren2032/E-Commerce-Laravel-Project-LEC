@extends('layouts.app')

@section('content')
    <div class="container justify-content-evenly">
        <div class="row justify-content-evenly my-5 text-center">
            <h1>{{$category['name']}}</h1>
            @foreach($items as $item)
            <a class="col text-decoration-none" href="{{route('detail',$item['id'])}}">
                <div class="card" style="width: 15rem;">
                    <img src="{{Storage::url($item['photo'])}}" class="card-img-top my-3 rounded-1 border border-1" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['name']}}</h5>
                        <p class="card-title">IDR {{$item['price']}}</p>
                        <a class="btn btn-primary" href="{{route('detail',$item['id'])}}">View More</a>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
