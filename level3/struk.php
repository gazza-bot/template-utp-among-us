<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "Nama : ". $_SESSION["nama"];
    echo "Jumlah Pesanan : ". $_SESSION["jumlah"];
    echo "Menu : ". $_SESSION["menu"];
    echo "Kategori Pelanggan : ". $_SESSION["kategori"];
    echo "Subtotal : ". $_SESSION["subtotal"];
    echo "Diskon : ". $_SESSION["diskon"];
    echo "Total : ". $_SESSION["total"];
}
