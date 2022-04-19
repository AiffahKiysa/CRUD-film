@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-mb-8">
                <div class="mb-3">
                    <h1 class="mt-3">{{ $film->title }}</h1>

                    <h4>
                        Genre : <a href="/film/{{ $film->genre->genre }}" class="text-decoration-none"> {{ $film->genre->genre }} </a>
                    </h4>
                    
                    <img src="https://source.unsplash.com/1200x400?{{ $film->title }}" class="img-responsive" alt="{{ $film->title }}" class="img-fluid">
                    
                    <div class="mt-3">Production : {{ $film->production }}</div>
                    <div class="mt-3">Runtime : {{ $film->runtime }}</div>
                    <div class="my-3 fs-7">
                        {!! $film->description !!}
                    </div>

                    <a href="{{ route('dashboard') }}" class="d-block mt-3">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
