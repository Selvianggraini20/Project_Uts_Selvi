<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #1b3b6f;">
    <div class="container mt-5">
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h3>Absensi Karyawan</h3>
            </div>
            <div class="card-body">
                <form action="/absensi/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">karyawan_id:</label>
                        <input type="number" name="Karyawan_id" id="karyawan_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Karyawan:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal:</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Kehadiran:</label>
                        <select name="status" class="form-control">
                            <option value="Hadir">Hadir</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Alpha">Alpha</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
        
        <table class="table table-bordered table-dark mt-3">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Tanggal</th>
                    <th>Status Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensis as $absensi)
                    <tr>
                        <td>{{ $absensi->name }}</td>
                        <td>{{ $absensi->date }}</td>
                        <td>{{ $absensi->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
