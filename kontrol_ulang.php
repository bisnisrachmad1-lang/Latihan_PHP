<?php
$nilai=90;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat Anda mendapat grade A <br>";}
else { echo "Maaf Anda belum dapat grade A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
case 100 :echo "Nilai yang dipilih 100 <br>";
break;
case 90 :echo "Nilai yang dipilih 90 <br>";
break;
} echo "CONTOH FOR <br>";
for($i=1;$i<=5;$i++) {
echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
echo "Looping While ke : ".$j."<br>";
$j++;
}
?>
<?php
// Input nilai (bisa diubah atau berasal dari form)
$nilai = 73;   // contoh nilai

echo "<h2>Penilaian Nilai Angka ke Huruf</h2>";
echo "Nilai Anda: $nilai <br>";

// Percabangan untuk menentukan grade
if ($nilai >= 80 && $nilai <= 100) {
    echo "Grade: A";
} elseif ($nilai >= 61 && $nilai <= 79) {
    echo "Grade: B";
} elseif ($nilai >= 51 && $nilai <= 60) {
    echo "Grade: C";
} elseif ($nilai >= 41 && $nilai <= 50) {
    echo "Grade: D";
} elseif ($nilai >= 0 && $nilai <= 40) {
    echo "Grade: E";
} else {
    echo "Nilai tidak valid (harus 0-100)";
}
?>
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
