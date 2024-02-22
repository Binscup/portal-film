<!-- dalam file resources/views/films/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h2>Daftar Film</h2>

        <a href="{{ route('films.create') }}" class="btn btn-success">Tambah Film Baru</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Film</th>
                    <th>Deskripsi</th>
                    <th>Tahun</th>
                    <th>Genre</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>{{ $film->id }}</td>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->description }}</td>
                        <td>{{ $film->year }}</td>
                        <td>{{ $film->genre->name }}</td>
                        <td>
                            <a href="{{ route('films.edit', $film->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('films.destroy', $film->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
