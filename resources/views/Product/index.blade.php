@extends('layouts.app')

@section('title', 'Category')
    
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Liste des Categories</h4>
                    <a href="{{ route('Product.create') }}" class="btn btn-success btn-sm">Créer un produit</a>
                </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Cover</th>
                <th>Current-Stock</th>
                <th>Publish</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                
           
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><img src="{{ asset($product->cover)}}"   width="70px" height="70px" alt=""></td>
                <td>{{$product->current_stock}}</td>
                <td>{{$product->publish}}</td>
                <td><a class="btn btn-success btn-sm"  href="{{ route('Product.edit',$product->id)}}">modifier</a>  <form action="{{route ('Product.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('delete')

                <button class="btn btn-danger btn-sm" href="">supprimer</button></form>
                  
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

    
@endsection