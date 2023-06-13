@extends('layouts.app')

@section('title','Contact')


@section('content')
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <form action="{{ route('contactsend') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email">Votre addresse email :</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="subject">Subject:</label>
                                    <input type="text" name="subject" id="subject" class="form-control" required>
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="message">Message :</label>
                                    <textarea name="message" id="message"  rows="6" class="form-control"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <form action="">
                                <div class="form-group">
                                    <button class="btn btn-dark w-100">Contactez-nous</button>
                                </div>
                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection