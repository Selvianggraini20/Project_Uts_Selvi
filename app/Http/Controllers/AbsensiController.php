<?php
namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',  // ID Karyawan harus ada di tabel Karyawan
            'status' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Menyimpan data absensi
        $absensi = new Absensi();
        $absensi->karyawan_id = $request->input('karyawan_id');
        $absensi->status = $request->input('status');
        $absensi->tanggal = $request->input('tanggal');
        $absensi->save();  // Menyimpan data ke database

        // Redirect ke halaman absensi dengan pesan sukses
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil disimpan!');
    }
}
