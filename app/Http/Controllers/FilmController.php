<?php

namespace App\Http\Controllers;

use App\Models\Distributed;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Film::latest()->get();
        return view('dashboard.index', [
            'films' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Distributed::latest()->get();
        return view('dashboard.film.create', [
            'distributed' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'genre' => 'required',
            'language' => 'required',
            'production' => 'required',
            'runtime' => 'required',
            'description' => 'required',
            'distributed' => 'required'
        ]);

        $genre = Genre::updateOrCreate([
            'genre' => $request['genre']
        ]);
        // $genre = Genre::firstWhere('name', $request['genre']);

        $distributed = Distributed::updateOrCreate([
            'distributed' => $request['distributed']
        ]);

        Film::create([
            'title' => $request['title'],
            'slug' => SlugService::createSlug(Film::class, 'slug', $request->title),
            'language' => $request['language'],
            'production' => $request['production'],
            'runtime' => $request['runtime'],
            'description' => $request['description'],
            'genre_id' => $genre->id,
            'distributed_id' => $distributed->id
        ]);
        return redirect()->route('dashboard.film', $distributed->distributed)->with('tambah_data', 'Penambahan Data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Film::where('id', $id)->first();
        return view('dashboard.film.detail', [
            'film' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Film::where('id', $id)->first();
        return view('dashboard.film.edit', [
            'film' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $genre = Genre::findOrFail($film->genre_id);
        $distributed = Distributed::findOrFail($film->distributed_id);
        $film->update([
            'title' => $request['title'],
            'slug' => SlugService::createSlug(Film::class, 'slug', $request->title),
            'language' => $request['language'],
            'production' => $request['production'],
            'runtime' => $request['runtime'],
            'description' => $request['description'],
            'genre_id' => $genre->id,
            'distributed_id' => $distributed->id
        ]);
        $genre->update([
            'genre' => $request['genre']
        ]);
        $genre->update([
            'distributed' => $request['distributed']
        ]);
        
        return redirect()->route('dashboard.film', $distributed->distributed)->with('edit_data', 'Pengeditan Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        $distributed = Distributed::findOrFail($film->distributed_id);
		return redirect()->route('dashboard.film', $distributed->distributed)->with('hapus_data', 'Penghapusan data berhasil');
    }

    // public function checkSlug(Request $request){
    //     $slug = SlugService::createSlug(Film::class, 'slug', $request['title']);
    //     return response()->json(['slug' => $slug]);
    // }
}
