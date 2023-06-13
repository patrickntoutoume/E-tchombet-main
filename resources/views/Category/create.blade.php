@extends('layouts.app')

@section('title', 'Enregistrement de categories')
    
@section('content')

<div class="container">
    <div class="row mt-5">
       <div class="col-md-6 offset-md-3">
           <div class="card bg-light">
               <div class="card-body">
                   <form action="{{route('Category.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group mt-3">
                           <label for="name"> Nom :  </label>
                           <input type="text" value="{{old ('name') }}" name="name" id="name" class="form-control  @error( 'name') is-invalid @enderror">
                           @error('name' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror 
                        </div>
                        <div class="form-group mt-3">
                           <label for="cover"> Cover :  </label>
                           <input type="file" value="{{old ('cover') }}" name="cover" id="cover" class="form-control  @error( 'cover') is-invalid @enderror">
                           @error('cover' )
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