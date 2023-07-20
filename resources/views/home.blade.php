@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
    <h1 class="text-center m-4">
    Laravel Model Controller
    </h1>

    <div class=" container d-flex justify-content-around flex-wrap">
        @foreach($movies as $movie)
        <div class="card my-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title}}</h6>
                <p class="card-text">data: {{ $movie->date }}</p>
                <p class="card-text">vote: {{ $movie->vote }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection