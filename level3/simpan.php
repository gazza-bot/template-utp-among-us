<?php
// Kerjakan mulai dari sini untuk menyimpan data ke Session
// $_SESSION["..."] = ...;
global $nama, $jumlah, $kategori, $menu ,$subtotal, $diskon, $total;
$_SESSION["nama"] = $nama;
$_SESSION["jumlah"] = $jumlah;
$_SESSION["kategori"] = $kategori;
$_SESSION["menu"] = $menu;
$_SESSION["subtotal"] = $subtotal;
$_SESSION["diskon"] = $diskon;
$_SESSION["total"] = $total;
