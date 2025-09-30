<?php
echo "<h2>PERULANGAN DARI 100 SAMPAI 1000</h2>";

// Metode 1: Menggunakan FOR
echo "<h3>1. Menggunakan FOR</h3>";
for($i=100; $i<=1000; $i++) {
    echo $i." ";
    // Membuat baris baru setiap 10 angka agar rapi
    if($i % 10 == 0) {
        echo "<br>";
    }
}

echo "<hr>";

// Metode 2: Menggunakan WHILE
echo "<h3>2. Menggunakan WHILE</h3>";
$j=100;
while($j<=1000) {
    echo $j." ";
    if($j % 10 == 0) {
        echo "<br>";
    }
    $j++;
}

echo "<hr>";

// Metode 3: Menggunakan DO-WHILE
echo "<h3>3. Menggunakan DO-WHILE</h3>";
$k=100;
do {
    echo $k." ";
    if($k % 10 == 0) {
        echo "<br>";
    }
    $k++;
} while($k<=1000);

echo "<hr>";

// Bonus: Perulangan dengan increment berbeda
echo "<h3>4. BONUS - Kelipatan 10 (100, 110, 120, ..., 1000)</h3>";
for($i=100; $i<=1000; $i+=10) {
    echo $i." ";
    if($i % 100 == 0) {
        echo "<br>";
    }
}
?>
<?php
echo "<h2>PERULANGAN DARI 100 SAMPAI 1000</h2>";

// 1. Perulangan menggunakan FOR (ditampilkan hanya sebagian agar tidak terlalu panjang)
echo "<h3>1. Menggunakan FOR</h3>";
for ($i = 100; $i <= 110; $i++) {   // contoh hanya sampai 110
    echo $i . " ";
}
echo "... (hingga 1000)";  // penanda bahwa aslinya sampai 1000

// 2. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
echo "<h3>2. Fungsi Bilangan Terbesar</h3>";
function bilanganTerbesar($a, $b) {
    return ($a > $b) ? $a : (($b > $a) ? $b : "Keduanya sama besar");
}
$angka1 = 100;
$angka2 = 150;
echo "Bilangan terbesar dari $angka1 dan $angka2 adalah: " . bilanganTerbesar($angka1, $angka2);

// 3. Tanggal sekarang dengan getdate()
echo "<h3>3. Tanggal Sekarang (getdate)</h3>";
$tanggal = getdate();
echo $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'];

// 4. Tanggal sekarang dengan date('d-F-Y')
echo "<h3>4. Tanggal Sekarang (date)</h3>";
echo date('d-F-Y');
?>
