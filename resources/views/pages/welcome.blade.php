@extends('layout.app')

@section('title', 'Welcome')

<h1 class="text-danger text-center py-5">Welcome to your Template Repository!!!</h1>
<p class="text-center fs-3"> All front-end assets is set and ready for your new projects! Enjoy! </p>



@section('content')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie )
        <div class="col-6 py-2">
            <div class="card text-center">
                <div class="card-body">
                    {{$movie->title}}

                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
@endsection