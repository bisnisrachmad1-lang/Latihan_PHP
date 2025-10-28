<!DOCTYPE html>
<html>
<head>
    <title>Sistem Tiket Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f0f9ff;
            color: #333;
        }
        h1 {
            color: #007bff;
            margin-top: 50px;
        }
        a {
            display: block;
            margin: 10px auto;
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 10px 20px;
            border-radius: 8px;
            width: 250px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Sistem Tiket Wisata</h1>
    <p>Gunakan link berikut untuk melihat informasi tiket:</p>
    <a href="{{ url('/tiket/Papuma/30000') }}">Tiket Papuma</a>
    <a href="{{ url('/tiket/Payangan/25000') }}">Tiket Payangan</a>
    <a href="{{ url('/tiket/Pasir Putih/15000') }}">Tiket Pasir Putihs</a>
</body>
</html>
