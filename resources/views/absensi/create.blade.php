<form action="{{ route('absensi.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="employee_id">Karyawan:</label>
        <select name="employee_id" class="form-control" required>
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="date">Tanggal:</label>
        <input type="date" name="date" class="form-control" required>
    </div>



    <div class="form-group">
        <label for="status">Status Kehadiran:</label>
        <select name="status" class="form-control" required>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alpha">Alpha</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<form action="{{ route('absensi.store') }}" method="POST">
    @csrf
    <!-- Input fields -->
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<form action="{{ route('absensi.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Karyawan:</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Kehadiran:</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Status Kehadiran:</label>
        <select name="status" class="form-control" required>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alpha">Alpha</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Absensi</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="karyawan_id">Nama Karyawan:</label>
                <select name="karyawan_id" id="karyawan_id" class="form-control">
                    @foreach ($karyawans as $karyawan)
                        <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status Kehadiran:</label>
                <select name="status" class="form-control" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alpha">Alpha</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection



