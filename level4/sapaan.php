<?php
// Level 4: Kerjakan mulai darisini

if(isset($_COOKIE["nama"]) && isset($_COOKIE["kategori"])) {
    $nama = $_COOKIE["nama"];
    $kategori = $_COOKIE["kategori"];
    if($kategori == "Crewmate") {
        echo "<p>Selamat datang kembali di Cafeteria, $nama! Tetap waspada terhadap $kategori!</p>";
    }else {
        echo "<p>Selamat datang kembali di Cafeteria, $nama!</p>";
    }
} else {
    echo "<p>Selamat datang di Kantin Pesawat The Skeld!</p>";
}
