<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Nilai Kelompok</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Kalkulator Nilai Akhir</h2>
        <p>Standar: Kehadiran(20%), Tugas(25%), Project(55%)</p>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label>Nilai Kehadiran (0-100):</label>
            <input type="number" name="kehadiran" min="0" max="100" required>
        </div>
        <div class="form-group">
            <label>Nilai Tugas (0-100):</label>
            <input type="number" name="tugas" min="0" max="100" required>
        </div>
        <div class="form-group">
            <label>Nilai Project Akhir (0-100):</label>
            <input type="number" name="project" min="0" max="100" required>
        </div>
        <button type="submit" name="hitung">Hitung Nilai Akhir</button>
    </form>

    <?php

    ?>
</div> 
</body>
</html>