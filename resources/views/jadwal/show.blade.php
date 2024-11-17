@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Jadwal Praktikum</h1>
    <table class="table">
        <tr>
            <th>ID Jadwal</th>
            <td>{{ $jadwal->id_jadwal }}</td>
        </tr>
        <tr>
            <th>Hari</th>
            <td>{{ $jadwal->hari }}</td>
        </tr>
        <tr>
            <th>Waktu</th>
            <td>{{ $jadwal->waktu }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $jadwal->kelas->nama_kelas }}</td>
        </tr>
        <tr>
            <th>Asisten Dosen</th>
            <td>
                @foreach($jadwal->asistenDosen as $asdos)
                    {{ $asdos->nama }}@if (!$loop->last), @endif
                @endforeach
            </td>
        </tr>
    </table>

    <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali ke Daftar Jadwal</a>
</div>
@endsection
