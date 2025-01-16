<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Attendance</title>
</head>
<body>
    <h1>Edit Student Attendance</h1>
    <form action="/karyawans/{{ $karyawan->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $karyawan->name }}" required>

        <label for="absensi_date">Attendance Date:</label>
        <input type="date" id="absensi_date" name="absensi_date" value="{{ $karyawan->absensi_date }}" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>