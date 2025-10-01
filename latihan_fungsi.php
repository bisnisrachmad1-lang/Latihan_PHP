<?php

echo "MEMBUAT FUNGSI <br>";

function berhasil()
{
    echo "SELAMAT ANDA BERHASIL";
} // Titik koma (;) tidak diperlukan setelah deklarasi fungsi

function gagal()
{
    echo "MAAF ANDA GAGAL";
}

$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
} // Titik koma (;) tidak diperlukan setelah blok if-else

echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";

// Fungsi dengan 2 parameter
function jumlah($a, $b)
{
    // Mengembalikan hasil penjumlahan
    return $a + $b;
}

$nilai1 = 10;
$nilai2 = 15;

// Memanggil fungsi jumlah dan menampilkan hasilnya
echo jumlah($nilai1, $nilai2); // Perbaikan: Menambahkan titik koma yang hilang

echo "<br>";
echo "FUNGSI BAWAAN<br>";

// Menggunakan fungsi getdate() untuk mendapatkan informasi tanggal dan waktu
$sekarang = getdate();

// Menampilkan seluruh isi array dari getdate()
print_r($sekarang);
echo "<br>";

// Mengambil satu elemen dari array untuk menampilkan tanggal
// Perbaikan: Menghilangkan spasi pada akhir key "mday " menjadi "mday"
echo "Sekarang Tanggal: " . $sekarang["mday"];

?>
<?php

// Mengatur zona waktu ke Asia/Jakarta (WIB) agar akurat
date_default_timezone_set('Asia/Jakarta');

echo "<h1>Tugas Pemrograman PHP</h1>";

// TUGAS 1: FUNGSI BILANGAN TERBESAR
echo "<h3>1. Menentukan Bilangan Terbesar</h3>";

// Membuat fungsi untuk mencari bilangan terbesar
function cariBilanganTerbesar($bil1, $bil2)
{
    if ($bil1 > $bil2) {
        return $bil1; // Jika bilangan 1 lebih besar, kembalikan bilangan 1
    } else {
        return $bil2; // Jika tidak, kembalikan bilangan 2
    }
}

// Contoh penggunaan fungsi
$angka1 = 100;
$angka2 = 150;
$terbesar = cariBilanganTerbesar($angka1, $angka2);

echo "Antara bilangan $angka1 dan $angka2, yang terbesar adalah: <strong>$terbesar</strong>";
echo "<hr>"; // Garis pemisah

// TUGAS 2: MENAMPILKAN TANGGAL DENGAN GETDATE()
echo "<h3>2. Menampilkan Tanggal dengan getdate()</h3>";

// Mengambil informasi tanggal saat ini dalam bentuk array
$infoTanggal = getdate();

// Mengambil elemen array yang dibutuhkan (hari, bulan, tahun)
$hari = $infoTanggal['mday'];
$bulan = $infoTanggal['mon'];
$tahun = $infoTanggal['year'];

// Menampilkan dengan format DD-MM-YYYY
echo "Format (DD-MM-YYYY): <strong>$hari-$bulan-$tahun</strong>";
echo "<hr>";

// TUGAS 3: MENAMPILKAN TANGGAL DENGAN FUNGSI DATE()
echo "<h3>3. Menampilkan Tanggal dengan date('d-F-Y')</h3>";

// Langsung memformat dan menampilkan tanggal saat ini
$tanggalFormat = date('d-F-Y');

echo "Format ('d-F-Y'): <strong>$tanggalFormat</strong>";

?>