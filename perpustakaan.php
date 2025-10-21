<?php
// =====================================================
// APLIKASI PERPUSTAKAAN SEDERHANA (MVC dalam 1 file)
// by Rachmad Ramadhan
// =====================================================

// ===== MODEL =====
class BukuModel {
    private $dataBuku = [];

    public function __construct() {
        // Simulasi data buku
        $this->dataBuku = [
            ["judul" => "Pemrograman Web", "pengarang" => "Rachmad Ramadhan", "tahun" => 2022],
            ["judul" => "Algoritma Dasar", "pengarang" => "Dewi Lestari", "tahun" => 2021],
            ["judul" => "Database MySQL", "pengarang" => "Andi Santoso", "tahun" => 2023],
            ["judul" => "Desain UI/UX Modern", "pengarang" => "Sinta Wahyuni", "tahun" => 2024]
        ];
    }

    // Ambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}

// ===== VIEW =====
class BukuView {
    public function render($dataBuku) {
        echo "<h2 style='text-align:center'>📚 Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellspacing='0' cellpadding='8' align='center'>";
        echo "<tr style='background:#add8e6;'>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
              </tr>";

        $no = 1;
        foreach ($dataBuku as $buku) {
            echo "<tr>";
            echo "<td align='center'>{$no}</td>";
            echo "<td>{$buku['judul']}</td>";
            echo "<td>{$buku['pengarang']}</td>";
            echo "<td align='center'>{$buku['tahun']}</td>";
            echo "</tr>";
            $no++;
        }

        echo "</table>";
        echo "<p style='text-align:center; font-style:italic; margin-top:10px;'>Aplikasi Perpustakaan Sederhana - MVC by Rachmad Ramadhan</p>";
    }
}

// ===== CONTROLLER =====
class BukuController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new BukuModel();
        $this->view = new BukuView();
    }

    public function tampilkanBuku() {
        $data = $this->model->getAllBuku();
        $this->view->render($data);
    }
}

// ===== EKSEKUSI =====
$controller = new BukuController();
$controller->tampilkanBuku();
?>
