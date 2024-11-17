@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Asisten Dosen</h1>
    <form action="{{ route('asisten_dosen.update', $asistenDosen->id_asdos) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_asdos">ID Asisten Dosen</label>
            <input type="text" class="form-control @error('id_asdos') is-invalid @enderror" id="id_asdos" name="id_asdos" value="{{ old('id_asdos', $asistenDosen->id_asdos) }}" readonly>
            @error('id_asdos')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $asistenDosen->username) }}">
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', $asistenDosen->password) }}">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm', $asistenDosen->npm) }}">
            @error('npm')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $asistenDosen->nama) }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
