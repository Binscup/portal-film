<!-- dalam file resources/views/genres/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Genre</h2>

    <form action="{{ route('genres.update', $genre->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Genre:</label>
            <input type="text" name="name" class="form-control" value="{{ $genre->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
