@extends('layouts.app')

@section('title', 'Category')
    
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Liste des Categories</h4>
                    <a href="{{ route('Category.create') }}" class="btn btn-success btn-sm">Créer une categorie de produits</a>
                </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cover</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td> {{$category->name}} </td>
                <td> <img src="{{ asset ($category->cover) }}"   width="70px" height="70px" alt=""></td>
                <td><a class="btn btn-success btn-sm"  href="{{route('Category.edit',$category->id)}}">modifier</a>
                    <form action="{{ route('Category.destroy',$category->id)}}" method="post">
                        @csrf
                        @method('delete')

                    <button class="btn btn-danger btn-sm" href="">supprimer</button>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>

    
@endsection