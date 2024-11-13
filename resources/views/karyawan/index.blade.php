@extends('layouts.app')

@section('content')
    <h1>Daftar Karyawan</h1>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->email }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->telepon }}</td>
                    <td>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
