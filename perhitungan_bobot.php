<?php
// Menerima data dari index.php
$nilai_kehadiran = $_POST['kehadiran'];
$nilai_tugas     = $_POST['tugas'];
$nilai_project   = $_POST['project'];

// Menghitung bobot
$bobot_kehadiran = $nilai_kehadiran * 0.20;
$bobot_tugas     = $nilai_tugas * 0.25;
$bobot_project   = $nilai_project * 0.55;

// Total nilai akhir
$nilai_akhir = round($bobot_kehadiran + $bobot_tugas + $bobot_project);
?>