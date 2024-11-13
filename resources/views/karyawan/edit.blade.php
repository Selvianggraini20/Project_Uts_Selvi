@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Karyawan</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Karyawan:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $karyawan->nama) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $karyawan->email) }}" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ old('jabatan', $karyawan->jabatan) }}">
            </div>

            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon', $karyawan->telepon) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
