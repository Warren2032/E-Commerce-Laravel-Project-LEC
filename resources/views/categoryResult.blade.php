@extends('layouts.app')

@section('content')
    <div class="container-2 justify-content-evenly">
        <div class="row justify-content-evenly my-5">
            <h1>{{$category['name']}}</h1>
            @foreach($items as $item)
            <a class="col text-decoration-none" href="" >
                <div class="card" style="width: 15rem;">
                    <img src="{{Storage::url($item['photo'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['name']}}</h5>
                        <p class="card-title">IDR {{$item['price']}}</p>
                        <a href="{{route('detail',$item['id'])}}" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
