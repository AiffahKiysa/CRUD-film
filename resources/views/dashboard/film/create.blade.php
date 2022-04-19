@extends('dashboard.layouts.main')

@section('container')

    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div>
                        <h1 class="text-center top-icon mt-3">Tambah film Baru</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('film.store') }}" method="post">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('title') is-invalid @enderror" name="title" type="text"
                                       placeholder="Title" value="{{ old('title') }}" >
                            </div>

                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                           
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre" type="text"
                                       placeholder="Genre" value="{{ old('genre') }}" >
                            </div>

                            @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('language') is-invalid @enderror" name="language" type="text"
                                       placeholder="Language" value="{{ old('language') }}" >
                            </div>

                            @error('language')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('production') is-invalid @enderror" name="production" type="text"
                                       placeholder="Production" value="{{ old('production') }}" >
                            </div>

                            @error('production')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('runtime') is-invalid @enderror" name="runtime" type="text"
                                       placeholder="Runtime" value="{{ old('runtime') }}" >
                            </div>
                            
                            @error('runtime')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('description') is-invalid @enderror" name="description" type="text"
                                       placeholder="Description" value="{{ old('description') }}" >
                            </div>

                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('distributed') is-invalid @enderror" name="distributed" type="text"
                                       placeholder="distributed" value="{{ old('distributed') }}" >
                            </div>

                            @error('distributed')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            
                            

                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <button type="submit" class="btn btn-primary" form="form-login">Add Film</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script> --}}
@endsection
