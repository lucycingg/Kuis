<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #add8e6;
        }
        .card {
            width: 900px; ;
            background-color: #e0f7fa;
            border-radius: 10px;
            padding: 20px;
        }
        .correct {
            color: green;
        }
        .wrong {
            color: red;
        }
        .score {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .kembali{
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            background-color: #008cba;
            color: black;
            padding: 10px 20px;
            border-radius: 10px;
        }
  </style>
</head>
  <body>
  <header class="px-4 d-flex align-items-center py-3 mb-4 border-bottom" style="background-color: #008080;">
    <img src="logo.png" alt="ini gambar logo" width="50">
    <h2 class="ms-3 mb-0">
        <strong style="font-weight: bold;">Learnify:</strong>
        <span style="font-size: 14px; font-family: verdana; font-weight: bold;">Belajar Cerdas, Kuasai Dunia!</span></h2>
</header>

<main class="d-flex justify-content-center">
    <div class="card">
        <div class="card-header text-center" style="font-weight:bold;">Kuis</div>
        <div class="card-body">
            
        <?php
    $tangkapjawaban1 = $_POST['jawaban1'];
    $tangkapjawaban2 = $_POST['jawaban2'];
    $tangkapjawaban3 = $_POST['jawaban3'];
    $tangkapjawaban4 = $_POST['jawaban4'];
    $tangkapjawaban5 = $_POST['jawaban5'];

    $kunci_jawaban = [
        "jawaban1" => "Hyper Text Markup Language",
        "jawaban2" => "background-color: red;",
        "jawaban3" => "br",
        "jawaban4" => "Memproses data di sisi server",
        "jawaban5" => "img src='gambar.jpg'"
    ];
    

    //perhitungan score nya
    $skor = 0;
    $total_soal = 5;

    //ini memeriksa jawaban yang benar
    echo "<p>Pertanyaan 1: ";
    if ($tangkapjawaban1 === $kunci_jawaban["jawaban1"]) {
        echo "<span class='correct'>Jawaban Anda benar!</span>";
        $skor++;
    } else {
        echo "<span class='wrong'>Jawaban Anda salah. Jawaban yang benar: " . $kunci_jawaban["jawaban1"] . "</span>";
    }
    echo "</p>";

    echo "<p>Pertanyaan 2: ";
    if ($tangkapjawaban2 === $kunci_jawaban["jawaban2"]) {
        echo "<span class='correct'>Jawaban Anda benar!</span>";
        $skor++;
    } else {
        echo "<span class='wrong'>Jawaban Anda salah. Jawaban yang benar: " . $kunci_jawaban["jawaban2"] . "</span>";
    }
    echo "</p>";

    echo "<p>Pertanyaan 3: ";
    if ($tangkapjawaban3 === $kunci_jawaban["jawaban3"]) {
        echo "<span class='correct'>Jawaban Anda benar!</span>";
        $skor++;
    } else {
        echo "<span class='wrong'>Jawaban Anda salah. Jawaban yang benar: " . $kunci_jawaban["jawaban3"] . "</span>";
    }
    echo "</p>";

    echo "<p>Pertanyaan 4: ";
    if ($tangkapjawaban4 === $kunci_jawaban["jawaban4"]) {
        echo "<span class='correct'>Jawaban Anda benar!</span>";
        $skor++;
    } else {
        echo "<span class='wrong'>Jawaban Anda salah. Jawaban yang benar: " . $kunci_jawaban["jawaban4"] . "</span>";
    }
    echo "</p>";

    echo "<p>Pertanyaan 5: ";
    if ($tangkapjawaban5 === $kunci_jawaban["jawaban5"]) {
        echo "<span class='correct'>Jawaban Anda benar!</span>";
        $skor++;
    } else {
        echo "<span class='wrong'>Jawaban Anda salah. Jawaban yang benar: " . $kunci_jawaban["jawaban5"] . "</span>";
    }
    echo "</p>";

    // Hitung persentase nilai
    $persentase = ($skor / $total_soal) * 100;
    ?>

    <p class="score">Skor Pengguna: <?= $skor ?> / <?= $total_soal ?></p>
    <p class="score">Presentase Nilai: <?= $persentase ?>%</p>
<div class="d-flex justify-content-end">
    <a href="index.php" class="kembali">Kembali ke Halaman Utama</a>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>