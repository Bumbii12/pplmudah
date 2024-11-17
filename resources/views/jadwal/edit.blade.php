@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Jadwal Praktikum</h1>
    <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_jadwal">ID Jadwal</label>
            <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" id="id_jadwal" name="id_jadwal" value="{{ old('id_jadwal', $jadwal->id_jadwal) }}" readonly>
            @error('id_jadwal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" value="{{ old('hari', $jadwal->hari) }}">
            @error('hari')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu', $jadwal->waktu) }}">
            @error('waktu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_kelas">Pilih Kelas</label>
            <select class="form-control @error('id_kelas') is-invalid @enderror" id="id_kelas" name="id_kelas">
                @foreach($kelas as $item)
                    <option value="{{ $item->id_kelas }}" {{ old('id_kelas', $jadwal->id_kelas) == $item->id_kelas ? 'selected' : '' }}>{{ $item->nama_kelas }}</option>
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
                    <option value="{{ $item->id_asdos }}" {{ in_array($item->id_asdos, old('id_asdos', $jadwal->asistenDosen->pluck('id_asdos')->toArray())) ? 'selected' : '' }}>{{ $item->nama }}</option>
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
