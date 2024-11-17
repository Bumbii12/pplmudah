@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kelas</h1>
    <form action="{{ route('kelas.update', $kelas->id_kelas) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_kelas">ID Kelas</label>
            <input type="text" class="form-control @error('id_kelas') is-invalid @enderror" id="id_kelas" name="id_kelas" value="{{ old('id_kelas', $kelas->id_kelas) }}" readonly>
            @error('id_kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}">
            @error('nama_kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror" id="nama_ruangan" name="nama_ruangan" value="{{ old('nama_ruangan', $kelas->nama_ruangan) }}">
            @error('nama_ruangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
