<!-- dalam file resources/views/genres/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Genre Baru</h2>

    <form action="{{ route('genres.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama Genre:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Simpan</button>
    </form>
@endsection
