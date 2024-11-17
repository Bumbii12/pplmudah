@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Asisten Dosen</h1>
    <a href="{{ route('asisten_dosen.create') }}" class="btn btn-primary mb-3">Tambah Asisten Dosen</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Asisten Dosen</th>
                <th>Username</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asistenDosen as $item)
                <tr>
                    <td>{{ $item->id_asdos }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->npm }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <a href="{{ route('asisten_dosen.edit', $item->id_asdos) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('asisten_dosen.destroy', $item->id_asdos) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
