<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Absensi Karyawan</h1>
        @yield('content')
        
    </div>
    <div class="container">
        <h1>Data Karyawan</h1>
        @yield('isi')
    </div>
</body>
</html>
<form action="{{ route('absensi.store') }}" method="POST">
    @csrf
    <!-- input lainnya -->
</form>
