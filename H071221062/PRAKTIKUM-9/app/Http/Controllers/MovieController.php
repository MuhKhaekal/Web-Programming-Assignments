<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view("index", compact("movies"));
    }
    public function tambahmovie()
    {
        return view("tambahmovie");
    }

    public function insertmovie(Request $request)
    {
        Movie::create($request->all());
        return redirect()->route("movie");
    }

    public function showmovie($id)
    {
        $data = Movie::find($id);
        return view("showmovie", compact("data"));
    }

    public function updatemovie(Request $request, $id)
    {
        $data = Movie::find($id);
        $data->update($request->all());
        return redirect()->route("movie");
    }

    public function delete($id)
    {
        $data = Movie::find($id);
        $data->delete();
        return redirect()->route("movie");
    }

    public function viewmovie($id)
    {
        $movies = Movie::where('id', $id)->get();
        if ($movies->isEmpty()) {
            $movies = Movie::where('id', $id)->get();
            return view('index', compact('movies'));
        } else {
            return view('viewmovie', compact('movies'));
        }
    }
}
