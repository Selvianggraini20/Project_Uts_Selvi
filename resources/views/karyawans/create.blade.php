<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABSENSI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:rgb(6, 3, 114);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color:rgb(33, 115, 203);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }
        h1 {
            margin-bottom: 25px;
            color:rgb(13, 21, 20);
            font-size: 24px;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color:rgb(20, 28, 27);
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #00796b;
            border-radius: 8px;
            font-size: 16px;
            color:rgb(4, 10, 10);
            outline: none;
        }
        input:focus {
            border-color: #004d40;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color:rgb(6, 64, 82);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color:rgb(185, 145, 15);
        }
        .form-footer {
            margin-top: 15px;
            font-size: 14px;
        }
        .form-footer a {
            color:rgb(1, 5, 5);
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ABSENSI</h1>
        <form action="/karyawans" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Enter student name" required>
            </div>

            <div class="form-group">
                <label for="absensi_date">Tanggal Absensi:</label>
                <input type="date" id="absensi_date" name="absensi_date" required>
            </div>

            <button type="submit">simpan</button>

            <div class="form-footer">
                <p>Already have an account? <a href="#">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
