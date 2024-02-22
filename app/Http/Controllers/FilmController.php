<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
      public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('films.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year' => 'required',
            'genres' => 'required',
        ]);

        $films = new Film;
        $films->title = $request->title;
        $films->description = $request->description;
        $films->year = $request->year;
        $films->genre_id = $request->genres;
        $films->save();

        return redirect()->route('films.index');
        
    }

    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('films.edit', compact('film', 'genres'));
    }

    public function update(Request $request, Film $film)
    {
        $film->update($request->all());
        return redirect()->route('films.index');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}
