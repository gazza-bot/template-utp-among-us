<?php
// Kerjakan Level 4 di sini: simpan nama pengguna ke Cookie
$expDate = time() + 60 * (33 + (27 * 60));
setcookie("nama", $_SESSION["nama"], $expDate);
setcookie("kategori", $_SESSION["kategori"], $expDate);
