<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        return view('genres.index', compact('genre'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $genre = new genre;
        $genre->name = $request->name;
        $genre->save();
        return redirect()->route('genres.index');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());
        return redirect()->route('genres.index');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index');
    }
}
