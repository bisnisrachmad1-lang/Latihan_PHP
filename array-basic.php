<?php
// 1. Membuat array awal
$punakawan = array("Semar", "Gareng", "Petruk", "Bagong");

// 2. Menampilkan elemen pertama (index 0)
echo $punakawan[0]; // Hasilnya akan: Semar
echo "<br>";

// 3. Menampilkan elemen keempat (index 3) dari array awal
echo $punakawan[3]; // Hasilnya akan: Bagong
echo "<br>"; // Menambahkan baris baru agar output lebih rapi

// 4. Mengubah dan menambah nilai array
$punakawan[1] = "Semar";   // Mengubah nilai index 1
$punakawan[2] = "Gareng";  // Mengubah nilai index 2
$punakawan[3] = "Petruk";  // Mengubah nilai index 3
$punakawan[4] = "Bagong";  // Menambah elemen baru di index 4

// 5. Menampilkan nilai BARU dari elemen keempat (index 3)
echo $punakawan[3]; // Hasilnya akan: Petruk
?>