@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kelas</h1>
    <table class="table">
        <tr>
            <th>ID Kelas</th>
            <td>{{ $kelas->id_kelas }}</td>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <td>{{ $kelas->nama_kelas }}</td>
        </tr>
        <tr>
            <th>Nama Ruangan</th>
            <td>{{ $kelas->nama_ruangan }}</td>
        </tr>
    </table>

    <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali ke Daftar Kelas</a>
</div>
@endsection
