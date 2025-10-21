<?php
class BukuView {
    public function render($dataBuku) {
        echo "<h2>📚 Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";

        $no = 1;
        foreach ($dataBuku as $buku) {
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>{$buku['judul']}</td>";
            echo "<td>{$buku['pengarang']}</td>";
            echo "<td>{$buku['tahun']}</td>";
            echo "</tr>";
            $no++;
        }

        echo "</table>";
    }
}
?>
