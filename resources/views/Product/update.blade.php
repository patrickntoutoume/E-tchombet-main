@extends('layouts.app')

@section('title', 'Enregistrement de produit')
    
@section('content')

<div class="container">
    <div class="row mt-5">
       <div class="col-md-6 offset-md-3">
           <div class="card bg-light">
               <div class="card-body">
                   <form action="{{route('Product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('put')
                       <div class="form-group mt-3">
                           <label for="name"> Nom :  </label>
                           <input type="text" value="{{old ('name') }}" name="name" id="name" class="form-control  @error( 'name') is-invalid @enderror">
                           @error('name' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror 
                        </div>
                        <div class="form-group mt-3">
                            <label for="price"> Prix :  </label>
                            <input type="text" value="{{old ('price') }}" name="price" id="price" class="form-control  @error( 'price') is-invalid @enderror">
                            @error('price' )
                            <span class="text-danger">{{$message}}</span>
                            @enderror 
                         </div>
                         <div class="form-group mt-3">
                            <label for="description"> Description :  </label>
                            <input type="text" value="{{old ('description') }}" name="description" id="description" class="form-control  @error( 'description') is-invalid @enderror">
                            @error('description' )
                            <span class="text-danger">{{$message}}</span>
                            @enderror 
                         </div>
                        <div class="form-group mt-3">
                           <label for="cover"> Cover :  </label>
                           <input type="file" value="{{old ('cover') }}" name="cover" id="cover"   @error( 'cover') is-invalid @enderror">
                           @error('cover' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>
                       <div class="form-group mt-3">
                        <label for="current_stock"> Quantité :  </label>
                        <input type="number" value="{{old ('current_stock') }}" name="current_stock" id="current_stock" class="form-control  @error( 'current_stock') is-invalid @enderror">
                        @error('current_stock' )
                        <span class="text-danger">{{$message}}</span>
                        @enderror 
                     </div>
                     <div class="form-group mt-3">
                        <label for="publish"> Publish :  </label>
                        <input type="date" value="{{old ('publish') }}" name="publish" id="publish" class="form-control  @error( 'publish') is-invalid @enderror">
                        @error('publish' )
                        <span class="text-danger">{{$message}}</span>
                        @enderror 
                     </div>
                       <div class="form-group" >
                        <button class="btn btn-dark w-100"> sauvegarder </button>
                    </div>
                   </form>
               </div>
           </div>
       </div>
    </div>

    
@endsection