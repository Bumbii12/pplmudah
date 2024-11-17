<?php

namespace App\Http\Controllers;

use App\Models\AsistenDosen;
use Illuminate\Http\Request;

class AsistenDosenController extends Controller
{
    public function index()
    {
        $asistenDosen = AsistenDosen::all();
        return view('asisten_dosen.index', compact('asistenDosen'));
    }

    public function create()
    {
        return view('asisten_dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_asdos' => 'required|unique:asisten_dosen',
            'username' => 'required',
            'password' => 'required',
            'npm' => 'required',
            'nama' => 'required',
        ]);

        AsistenDosen::create($request->all());
        return redirect()->route('asisten_dosen.index')->with('success', 'Asisten Dosen berhasil ditambahkan.');
    }

    public function show($id)
    {
        $asistenDosen = AsistenDosen::findOrFail($id);
        return view('asisten_dosen.show', compact('asistenDosen'));
    }

    public function edit($id)
    {
        $asistenDosen = AsistenDosen::findOrFail($id);
        return view('asisten_dosen.edit', compact('asistenDosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'npm' => 'required',
            'nama' => 'required',
        ]);

        $asistenDosen = AsistenDosen::findOrFail($id);
        $asistenDosen->update($request->all());
        return redirect()->route('asisten_dosen.index')->with('success', 'Asisten Dosen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $asistenDosen = AsistenDosen::findOrFail($id);
        $asistenDosen->delete();
        return redirect()->route('asisten_dosen.index')->with('success', 'Asisten Dosen berhasil dihapus.');
    }
}
