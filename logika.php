<?php
// Menggunakan variabel $nilai_akhir dari file hitung_bobot.php
$huruf = "";

if ($nilai_akhir >= 80 && $nilai_akhir <= 100) {
    $huruf = "A";
} elseif ($nilai_akhir >= 70 && $nilai_akhir <= 79) {
    $huruf = "B";
} elseif ($nilai_akhir >= 60 && $nilai_akhir <= 69) {
    $huruf = "C";
} elseif ($nilai_akhir >= 31 && $nilai_akhir <= 59) {
    $huruf = "D";
} elseif ($nilai_akhir >= 0 && $nilai_akhir <= 30) {
    $huruf = "E";
} else {
    $huruf = "Invalid";
}
?>