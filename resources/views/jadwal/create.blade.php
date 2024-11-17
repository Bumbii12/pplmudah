@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Jadwal Praktikum</h1>
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_jadwal">ID Jadwal</label>
            <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" id="id_jadwal" name="id_jadwal" value="{{ old('id_jadwal') }}">
            @error('id_jadwal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" value="{{ old('hari') }}">
            @error('hari')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}">
            @error('waktu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_kelas">Pilih Kelas</label>
            <select class="form-control @error('id_kelas') is-invalid @enderror" id="id_kelas" name="id_kelas">
                @foreach($kelas as $item)
                    <option value="{{ $item->id_kelas }}" {{ old('id_kelas') == $item->id_kelas ? 'selected' : '' }}>{{ $item->nama_kelas }}</option>
                @endforeach
            </select>
            @error('id_kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_asdos">Pilih Asisten Dosen (maksimal 3)</label>
            <select multiple class="form-control @error('id_asdos') is-invalid @enderror" id="id_asdos" name="id_asdos[]">
                @foreach($asistenDosen as $item)
                    <option value="{{ $item->id_asdos }}" {{ in_array($item->id_asdos, old('id_asdos', [])) ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('id_asdos')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
