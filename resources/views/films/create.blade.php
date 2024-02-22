<!-- dalam file resources/views/films/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Film Baru</h2>

    <form action="{{ route('films.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul Film:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="year">Tahun:</label>
            <input type="number" name="year" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genres">Genre:</label>
            <select name="genres" class="form-control"  required>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
