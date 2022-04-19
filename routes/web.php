<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Models\Distributed;
use App\Models\Genre;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//home
Route::get('/dashboard', [FilmController::class, 'index'])->name('dashboard');

//buat
Route::get('/dashboard/film/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/dashboard/film/store', [FilmController::class, 'store'])->name('film.store');

//edit
Route::get('/dashboard/film/edit/{id}', [FilmController::class, 'edit'])->name('film.edit');
Route::post('/dashboard/film/update/{id}', [FilmController::class, 'update'])->name('film.update');

//detail
Route::get('/dashboard/film/detail/{id}', [FilmController::class, 'show'])->name('film.show');

//delete
Route::delete('/dashboard/film/delete/{id}', [FilmController::class, 'destroy'])->name('film.destroy');


Route::get('/dashboard/{distributed:distributed}', function(Distributed $distributed){
    return view('dashboard.film.list-film', [
        'films' => $distributed->film
    ]);
})->name('dashboard.film');

Route::get('/film/{genre:genre}', function(Genre $genre){
    return view('dashboard.film.list-film', [
        'films' => $genre->film
    ]);
});