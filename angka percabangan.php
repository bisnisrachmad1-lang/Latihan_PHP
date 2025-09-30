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
