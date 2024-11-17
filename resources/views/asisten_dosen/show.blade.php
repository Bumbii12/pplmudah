@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Asisten Dosen</h1>
    <table class="table">
        <tr>
            <th>ID Asisten Dosen</th>
            <td>{{ $asistenDosen->id_asdos }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ $asistenDosen->username }}</td>
        </tr>
        <tr>
            <th>NPM</th>
            <td>{{ $asistenDosen->npm }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $asistenDosen->nama }}</td>
        </tr>
    </table>

    <a href="{{ route('asisten_dosen.index') }}" class="btn btn-secondary">Kembali ke Daftar Asisten Dosen</a>
</div>
@endsection
