@extends('layouts.app')

@section('title', 'Home')
    
@section('content')

<h1> index</h1>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card"   >
                    <img class="card-img-top" src="{{ $product->cover }}" alt="Card image cap">
                  
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ \Str::limit($product->description, 10) }}</p>
                        <p class="card-text">{{$product->price}} dhs</p>
                        <a href="{{route('panier', $product->id)}}" class="btn btn-primary">ajouter au panier</a>
                    </div>
                </div>
                <br><br>
            </div>
        @endforeach
    </div>

</div>
@endsection