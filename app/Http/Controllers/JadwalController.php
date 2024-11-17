<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\AsistenDosen;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
    // Ambil data jadwal dengan relasi kelas dan asisten dosen
    $jadwals = Jadwal::with(['kelas', 'asistenDosen'])->get();

    // Kirim data ke view
    return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        $asistenDosen = AsistenDosen::all();
        return view('jadwal.create', compact('kelas', 'asistenDosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jadwal' => 'required|unique:jadwal',
            'hari' => 'required',
            'waktu' => 'required',
            'id_asdos' => 'required|array|max:3',
            'id_kelas' => 'required',
        ]);

        foreach ($request->id_asdos as $asdos) {
            Jadwal::create([
                'id_jadwal' => $request->id_jadwal,
                'hari' => $request->hari,
                'waktu' => $request->waktu,
                'id_asdos' => $asdos,
                'id_kelas' => $request->id_kelas,
            ]);
        }

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function show($id)
    {
        $jadwal = Jadwal::with(['asistenDosen', 'kelas'])->findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $kelas = Kelas::all();
        $asistenDosen = AsistenDosen::all();
        return view('jadwal.edit', compact('jadwal', 'kelas', 'asistenDosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required',
            'waktu' => 'required',
            'id_asdos' => 'required|array|max:3',
            'id_kelas' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->only('hari', 'waktu', 'id_kelas'));

        $jadwal->asistenDosen()->sync($request->id_asdos);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
