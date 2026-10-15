<?php
// Kerjakan Level 4 di sini: simpan nama pengguna ke Cookie
$expDate = time() + 60 * (33 + (27 * 60));
setcookie("nama", $_COOKIE["nama"], $expDate);
setcookie("kategori", $_COOKIE["kategori"], $expDate);
