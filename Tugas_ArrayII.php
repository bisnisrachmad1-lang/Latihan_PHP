<?php
echo "<style>
body { font-family: Arial; background-color:#f8f9fa; color:#333; }
h2 { background:#007BFF; color:white; padding:8px; border-radius:5px; }
table { border-collapse: collapse; margin:8px 0; }
td, th { border:1px solid #999; padding:6px 10px; text-align:center; }
hr { border:1px solid #007BFF; margin:20px 0; }
</style>";

/* ===========================
   SOAL 1
   =========================== */
echo "<h2>Soal 1 – Data Siswa</h2>";

$siswa = [
    ["nama"=>"Rina", "matematika"=>89, "bahasa"=>93],
    ["nama"=>"Doni", "matematika"=>76, "bahasa"=>85],
    ["nama"=>"Salsa", "matematika"=>95, "bahasa"=>90]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 ({$siswa[1]['nama']}): <b>{$siswa[1]['bahasa']}</b><br><br>";

// Cetak semua data dalam bentuk tabel
echo "<table>
<tr><th>Nama</th><th>Matematika</th><th>Bahasa</th></tr>";
foreach ($siswa as $row) {
    echo "<tr><td>{$row['nama']}</td><td>{$row['matematika']}</td><td>{$row['bahasa']}</td></tr>";
}
echo "</table>";

/* ===========================
   SOAL 2
   =========================== */
echo "<h2>Soal 2 – Data Buah</h2>";

$buah = [
    ["nama"=>"Apel", "harga"=>15000, "stok"=>10],
    ["nama"=>"Jeruk", "harga"=>12000, "stok"=>8],
    ["nama"=>"Mangga", "harga"=>20000, "stok"=>5],
    ["nama"=>"Pisang", "harga"=>8000, "stok"=>12]
];

// Cetak nama buah pertama
echo "Nama buah pertama: <b>{$buah[0]['nama']}</b><br>";

// Hitung total nilai stok * harga untuk semua buah
$total_nilai = 0;
echo "<table>
<tr><th>Nama Buah</th><th>Harga</th><th>Stok</th><th>Total Nilai</th></tr>";
foreach ($buah as $b) {
    $subtotal = $b["harga"] * $b["stok"];
    $total_nilai += $subtotal;
    echo "<tr>
            <td>{$b['nama']}</td>
            <td>Rp " . number_format($b['harga'], 0, ',', '.') . "</td>
            <td>{$b['stok']}</td>
            <td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
          </tr>";
}
echo "</table>";
echo "<b>Total Keseluruhan: Rp " . number_format($total_nilai, 0, ',', '.') . "</b><br>";

/* ===========================
   SOAL 3
   =========================== */
echo "<h2>Soal 3 – Produk E-Commerce</h2>";

$produk = [
    ["nama"=>"Smartwatch Z", "kategori"=>"Gadget", "harga"=>2500000, "rating"=>4.6],
    ["nama"=>"Kamera Mirrorless X", "kategori"=>"Elektronik", "harga"=>7200000, "rating"=>4.9],
    ["nama"=>"Laptop Pro 14", "kategori"=>"Elektronik", "harga"=>9800000, "rating"=>4.8]
];

// Cari produk dengan harga tertinggi
$termahal = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $termahal["harga"]) {
        $termahal = $p;
    }
}

echo "<table>
<tr><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Rating</th></tr>";
foreach ($produk as $p) {
    echo "<tr>
            <td>{$p['nama']}</td>
            <td>{$p['kategori']}</td>
            <td>Rp " . number_format($p['harga'], 0, ',', '.') . "</td>
            <td>{$p['rating']}</td>
          </tr>";
}
echo "</table>";

echo "Produk dengan harga tertinggi adalah: <b>{$termahal['nama']}</b> dengan harga Rp " . number_format($termahal['harga'], 0, ',', '.') . "<br>";

/* ===========================
   SOAL 4
   =========================== */
echo "<h2>Soal 4 – Matriks 3x3</h2>";

$matriks = [];
$total = 0;
for ($i=0; $i<3; $i++) {
    for ($j=0; $j<3; $j++) {
        $matriks[$i][$j] = rand(1,9);
        $total += $matriks[$i][$j];
    }
}

// Cetak dalam bentuk tabel (matriks)
echo "<table>";
for ($i=0; $i<3; $i++) {
    echo "<tr>";
    for ($j=0; $j<3; $j++) {
        echo "<td>{$matriks[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "Jumlah total semua elemen matriks adalah: <b>$total</b><br>";
?>
