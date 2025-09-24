<!DOCTYPE html>
<html>
<head>
    <title>POLIJE Bondowoso - Bisnis 2024</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        h2 { color: #2c3e50; }
        input, button { padding: 8px; margin: 5px 0; }
        .box { border:1px solid #ccc; padding:20px; margin-bottom:20px; border-radius:10px; }
    </style>
</head>
<body>
<h1>Login Mahasiswa POLIJE Kampus 2 Bondowoso</h1>
<p><b>Jurusan Bisnis 2024</b> - By Rachmad Ramadhan</p>

<div class="box">
<form method="post">
    <h2>🔑 Login Mahasiswa</h2>
    NIM : <input type="text" name="nim" required><br>
    Password : <input type="password" name="pass" required><br>
    Nama : <input type="text" name="nama" required><br><br>

    <h2>📝 Input Nilai</h2>
    Nilai Matematika : <input type="number" name="mtk" min="0" max="100" required><br>
    Nilai Bahasa Indonesia : <input type="number" name="indo" min="0" max="100" required><br>
    Nilai Manajemen : <input type="number" name="mnj" min="0" max="100" required><br><br>

    <button type="submit" name="proses">Proses</button>
</form>
</div>

<?php
if (isset($_POST['proses'])) {

    // Input
    $nim   = $_POST['nim'];
    $pass  = $_POST['pass'];
    $nama  = $_POST['nama'];
    $mtk   = $_POST['mtk'];
    $indo  = $_POST['indo'];
    $mnj   = $_POST['mnj'];

    // ===== 1. Percabangan LOGIN =====
    echo "<div class='box'><h2>🔑 Hasil Login</h2>";
    $nimBenar  = "2024BISNIS01";
    $passBenar = "polije2024";

    if ($nim == $nimBenar && $pass == $passBenar) {
        echo "✅ Login Berhasil!<br>";
        echo "Selamat datang, <b>$nama</b> (NIM: $nim).<br>";
    } else {
        echo "❌ Login Gagal! NIM/Password salah.<br>";
        echo "</div>";
        exit(); // hentikan proses jika login gagal
    }
    echo "</div>";

    // ===== 2. Percabangan Nilai Ujian =====
    echo "<div class='box'><h2>📊 Nilai Ujian</h2>";
    $rata = ($mtk + $indo + $mnj) / 3;
    echo "Matematika : $mtk<br>";
    echo "B. Indonesia : $indo<br>";
    echo "Manajemen : $mnj<br>";
    echo "Rata-rata : <b>$rata</b><br>";

    if ($rata >= 75) {
        echo "Status Akhir : ✅ Lulus<br>";
    } else {
        echo "Status Akhir : ❌ Tidak Lulus<br>";
    }
    echo "</div>";

    // ===== 3. Percabangan Predikat Nilai =====
    echo "<div class='box'><h2>🏅 Predikat Nilai (Rata-rata)</h2>";
    if ($rata >= 90) {
        echo "Predikat : 🏆 A (Sangat Baik)";
    } elseif ($rata >= 80) {
        echo "Predikat : 👍 B (Baik)";
    } elseif ($rata >= 70) {
        echo "Predikat : 😐 C (Cukup)";
    } else {
        echo "Predikat : ❌ D (Kurang)";
    }
    echo "</div>";

    // ===== 4. Percabangan Remedial =====
    echo "<div class='box'><h2>⚠️ Remedial</h2>";
    // Remedial jika ada mata kuliah di bawah 60
    if ($mtk < 60 || $indo < 60 || $mnj < 60) {
        echo "⚠️ Anda WAJIB mengikuti Remedial karena ada nilai <60.";
    } else {
        echo "✅ Tidak perlu Remedial. Semua nilai ≥ 60.";
    }
    echo "</div>";

    // ===== 5. Percabangan Bonus Kehadiran =====
    echo "<div class='box'><h2>🎁 Bonus Kehadiran</h2>";
    // Bonus jika rata-rata tinggi
    if ($rata >= 85) {
        echo "Selamat! Anda mendapat <b>Bonus Kehadiran 5%</b> untuk semester berikutnya.";
    } else {
        echo "Tidak ada bonus kehadiran.";
    }
    echo "</div>";
}
?>
</body>
</html>
