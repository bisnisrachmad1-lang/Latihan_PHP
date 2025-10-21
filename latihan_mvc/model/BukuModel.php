<?php
class BukuModel {
    private $dataBuku = [];

    public function __construct() {
        $this->dataBuku = [
            ["judul" => "Pemrograman Web", "pengarang" => "Rachmad Ramadhan", "tahun" => 2022],
            ["judul" => "Algoritma Dasar", "pengarang" => "Dewi Lestari", "tahun" => 2021],
            ["judul" => "Database MySQL", "pengarang" => "Andi Santoso", "tahun" => 2023],
        ];
    }

    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
