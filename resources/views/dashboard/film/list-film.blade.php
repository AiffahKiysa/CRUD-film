@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Netflix film</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <a href="{{ route('film.create') }}" class="btn btn-primary mb-3">Add Film</a>
        <br/>
        @if (Session::has('tambah_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penambahan artikel Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if (Session::has('edit_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Pengeditan artikel Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if (Session::has('hapus_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penghapusan artikel Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Genre</th>
                <th scope="col">language</th>
                <th scope="col">Production Company</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $film->title }}</td>
                <td>{{ $film->genre->genre }}</td>
                <td>{{ $film->language }}</td>
                <td>{{ $film->production }}</td>
                <td style="width:150px">
                    <a href="{{ route('film.show', $film->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="{{ route('film.edit', $film->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="{{ route('film.destroy', $film->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    
@endsection