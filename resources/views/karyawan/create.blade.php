@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Karyawan Baru</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Karyawan:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control">
            </div>

            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" name="telepon" id="telepon" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
