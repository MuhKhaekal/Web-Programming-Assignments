<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/movie', function () {
    $movies = Movie::all();
    return view("index", compact("movies"));
});

Route::get('/', [MovieController::class, "index"])->name("movie");

Route::get('/tambahmovie', [MovieController::class, "tambahmovie"])->name("tambahmovie");
Route::post('/insertmovie', [MovieController::class,'insertmovie'])->name('insertmovie');

Route::get('/showmovie/{id}', [MovieController::class,'showmovie'])->name('showmovie');
Route::post('/updatemovie/{id}', [MovieController::class,'updatemovie'])->name('updatemovie');

Route::get('/delete/{id}', [MovieController::class,'delete'])->name('delete');

Route::get('/viewmovie/{id}', [MovieController::class,'viewmovie'])->name('viewmovie');


