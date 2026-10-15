<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini
if($jumlah <= 0) {
    header("location: ../index.php");
}

// Hitung harga
$harga = 0;
$subtotal = $harga * $jumlah;
// Hitung Diskon
$diskon = 0;
if($kategori == "Crewmate" && $jumlah == 4) {
    $diskon = ($subtotal * 0.15);
}

// total harga
$total = $subtotal - $diskon;
// cek valid
$valid = true;
$pesan = "";
if($total < 0) {
    $valid = false;
    $pesan = "Pesanan Tidak Valid untuk Pelanggan $nama";
} else {
    $pesan = "Pesanan Valid untuk Pelanggan $nama";
}
