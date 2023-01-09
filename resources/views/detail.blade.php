@extends('layouts.app')

@section('content')
    <div class="container text-justify border border rounded-1 bg-body-secondary shadow-secondary">
        <div class="clearfix">
          <img src="..." class="col-md-6 float-md-start mb-5 ms-md-1" alt="...">
          
          <div class="card border border-0 bg-body-secondary" style="width: 30rem; height: 30rem">
            <div class="card-body">
                <p class="card-text">amounts sold : amounts here</p>
                <p class="card-text">description : desc. here</p>
                <p class="card-text my-5">material : material here</p>
                <p class="card-text my-5">sizing : sizing here</p>
                <p class="card-text my-5">colors and stocks available : lists here</p>
                <p class="card-text my-5">price : price here.</p>
  
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