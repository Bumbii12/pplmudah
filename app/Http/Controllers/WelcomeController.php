<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil data jadwal beserta relasi kelas dan asisten dosen
        $jadwals = Jadwal::with(['kelas', 'asistenDosen'])->get();

        // Kirim data ke view welcome.blade.php
        return view('welcome', compact('jadwals'));
    }
}
