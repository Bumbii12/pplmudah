@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Jadwal Praktikum</h1>
    <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Jadwal</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Kelas</th>
                <th>Asisten Dosen</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal->id_jadwal }}</td>
                    <td>{{ $jadwal->hari }}</td>
                    <td>{{ $jadwal->waktu }}</td>
                    <td>{{ $jadwal->kelas->nama_kelas }}</td>
                    <td>
                        @if($jadwal->asistenDosen)
                            {{ $jadwal->asistenDosen->nama }}
                        @else
                            <em>Belum ada asisten dosen</em>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('jadwal.show', $jadwal->id_jadwal) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('jadwal.edit', $jadwal->id_jadwal) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jadwal.destroy', $jadwal->id_jadwal) }}" method="POST" style="display:inline;">
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
