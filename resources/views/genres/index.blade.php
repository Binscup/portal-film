<!-- dalam file resources/views/genres/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Genre</h2>

    <a href="{{ route('genres.create') }}" class="btn btn-success">Tambah Genre Baru</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genre as $genre)
                <tr>
                    <td >{{ $genre->id }}</td>
                    <td name='name'>{{ $genre->name }}</td>
                    <td>
                        <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('genres.destroy', $genre->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus genre ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
