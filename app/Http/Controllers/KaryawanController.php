<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $karyawans = Karyawan::all();
    return view('karyawan.index', compact('karyawans'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('karyawan.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:karyawans',
        'jabatan' => 'nullable|string|max:255',
        'telepon' => 'nullable|string|max:15',
    ]);

    Karyawan::create($request->all());

    return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:karyawans,email,' . $id,
        'jabatan' => 'nullable|string|max:255',
        'telepon' => 'nullable|string|max:15',
    ]);

    $karyawan = Karyawan::findOrFail($id);
    $karyawan->update($request->all());

    return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $karyawan = Karyawan::findOrFail($id);
    $karyawan->delete();

    return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus');
}

}
