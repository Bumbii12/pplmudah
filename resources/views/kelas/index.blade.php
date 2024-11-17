@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kelas</h1>
    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Nama Ruangan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $item)
                <tr>
                    <td>{{ $item->id_kelas }}</td>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>{{ $item->nama_ruangan }}</td>
                    <td>
                        <a href="{{ route('kelas.edit', $item->id_kelas) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kelas.destroy', $item->id_kelas) }}" method="POST" style="display:inline;">
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
