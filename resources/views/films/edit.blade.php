<!-- dalam file resources/views/films/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Film</h2>

        <form action="{{ route('films.update', $film->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul Film:</label>
                <input type="text" name="title" class="form-control" value="{{ $film->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" rows="3" required>{{ $film->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>

        </form>
    @endsection
