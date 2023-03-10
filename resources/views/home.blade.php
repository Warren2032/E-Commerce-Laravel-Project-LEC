@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('category', 1)}}" id="banner">
        <img id="banner-img" src="{{ asset('storage/Images/banner.png') }}" alt="">
    </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($items as $key=>$categoryItems)
            <div class="card mb-3">
                <div class="card-header">
                    <a href="{{route('category',$key)}}"> {{$categories[$key-1]['name']}} </a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="d-flex justify-content-auto row row-cols-5 ">
                            @foreach($categoryItems as $item)
                            <a class="col text-decoration-none d-flex flex-column" href="{{route('detail',$item['id'])}}" >
                                <img class="rounded-1 border shadow" src="{{Storage::url($item['photo'])}}" alt="Responsive image">
                                <div class="position-sticky top-100">
                                    <div class="row">
                                        <span class="d-inline-block text-truncate" style="max-width:300px; ">{{$item['name']}} </span>
                                        <span >{{'IDR. '.number_format($item['price'], 2, '.', ',')}}</span>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
