<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Kalkulator Nilai Akhir</h2>
        <p>Sesuai Standar Penilaian: Kehadiran(20%), Tugas(25%), Project(55%)</p>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="kehadiran">Nilai Kehadiran (0-100):</label>
            <input type="number" name="kehadiran" id="kehadiran" min="0" max="100" required>
        </div>
        
        <div class="form-group">
            <label for="tugas">Nilai Tugas (0-100):</label>
            <input type="number" name="tugas" id="tugas" min="0" max="100" required>
        </div>
        
        <div class="form-group">
            <label for="project">Nilai Project Akhir (0-100):</label>
            <input type="number" name="project" id="project" min="0" max="100" required>
        </div>
        
        <button type="submit" name="hitung">Hitung Nilai Akhir</button>
    </form>

    <?php
    // Mengecek apakah tombol hitung sudah ditekan
    if (isset($_POST['hitung'])) {
        // Mengambil input dari form (Tugas Orang ke-1)
        $nilai_kehadiran = $_POST['kehadiran'];
        $nilai_tugas     = $_POST['tugas'];
        $nilai_project   = $_POST['project'];

        // Menghitung bobot (Sesuai Gambar: 20%, 25%, 55%)
        $bobot_kehadiran = $nilai_kehadiran * 0.20;
        $bobot_tugas     = $nilai_tugas * 0.25;
        $bobot_project   = $nilai_project * 0.55;

        // Menjumlahkan total nilai
        $nilai_akhir = $bobot_kehadiran + $bobot_tugas + $bobot_project;
        
        // Membulatkan nilai jika ada desimal (opsional)
        $nilai_akhir = round($nilai_akhir);

// Menentukan Grade Huruf berdasarkan Range Nilai dari gambar
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
            $huruf = "Nilai Tidak Valid";
        }

// Menampilkan Hasil Akhir ke layar HTML
        echo "<div class='result-card'>";
        echo "<h3>Hasil Penilaian:</h3>";
        echo "Total Nilai Akhir (Angka): <strong>" . $nilai_akhir . "</strong><br>";
        echo "Grade (Huruf): <span class='grade-highlight'>" . $huruf . "</span>";
        echo "</div>";
    } // Penutup blok if(isset)
    ?>
</div> </body>
</html>