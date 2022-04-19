@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="container position-center">
        <div class="row page-bg">
            <div class="p-4 col-md-12">
                <div class="text-center top-icon">
                    <h1 class="mt-3">Edit film</h1>
                    <br>
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif

                    @if (Session::has('wrongUsername'))
                        <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                    @endif

                    <form id="form-login" action="{{ route('film.update', $film->id) }}" method="post" onsubmit="return confirm('Apakah Anda Yakin Edit film ?');">
                        @csrf

                        <div>
                            <input class="mt-3 form-control form-control-lg @error('title') is-invalid @enderror" name="title" type="text"
                                   placeholder="Title" value="{{ $film->title ? $film->title : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('title')
                        <div class="alert alert-danger">
                            Title salah
                        </div>
                        @enderror

                        <div>
                            <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre" type="text"
                                   placeholder="genre" value="{{ $film->genre->genre ? $film->genre->genre : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('genre')
                        <div class="alert alert-danger">
                            genre Salah
                        </div>
                        @enderror
                        
                        <div>
                            <input class="mt-3 form-control form-control-lg @error('language') is-invalid @enderror" name="language" type="text"
                                   placeholder="language" value="{{ $film->language ? $film->language : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('language')
                        <div class="alert alert-danger">
                            language Salah
                        </div>
                        @enderror

                        <div>
                            <input class="mt-3 form-control form-control-lg @error('production') is-invalid @enderror" name="production" type="text"
                                   placeholder="production" value="{{ $film->production ? $film->production : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('production')
                        <div class="alert alert-danger">
                            production Salah
                        </div>
                        @enderror

                        <div>
                            <input class="mt-3 form-control form-control-lg @error('runtime') is-invalid @enderror" name="runtime" type="text"
                                   placeholder="runtime" value="{{ $film->runtime ? $film->runtime : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('runtime')
                        <div class="alert alert-danger">
                            runtime Salah
                        </div>
                        @enderror
                        
                        <div>
                            <input class="mt-3 form-control form-control-lg @error('description') is-invalid @enderror" name="description" type="text"
                                   placeholder="description" value="{{ $film->description ? $film->description : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('description')
                        <div class="alert alert-danger">
                            description Salah
                        </div>
                        @enderror
                        
                        <div>
                            <input class="mt-3 form-control form-control-lg @error('distributed') is-invalid @enderror" name="distributed" type="text"
                                   placeholder="distributed" value="{{ $film->distributed->distributed ? $film->distributed->distributed : 'Tidak Ada film' }}" autofocus required>
                        </div>

                        @error('distributed')
                        <div class="alert alert-danger">
                            distributed Salah
                        </div>
                        @enderror
                    </form>
                    <br>
                    <div class="mt-4 text-center submit-btn">
                        <a href="{{ route('dashboard.film', $film->distributed->distributed) }}" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali</a>
                        <button type="submit" class="btn btn-primary" form="form-login">Edit film</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection