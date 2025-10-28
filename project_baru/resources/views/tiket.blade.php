<!DOCTYPE html>
<html>
<head>
    <title>Informasi Tiket Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f5ff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            color: #007bff;
        }
        .harga {
            color: #28a745;
            font-size: 20px;
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 16px;
            background: #007bff;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <span class="harga">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>
        <a href="{{ url('/') }}">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
