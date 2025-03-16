<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .question {
            font-weight: bold;
            font-size: 16px;
            margin-top: 10px;
        }
        .options {
            list-style-type: none;
        }
        .options li {
            margin-bottom: 8px;
            font-size: 14px;
        }
        .button-container {
            text-align: right;
        }
        .submit {
            background-color: #008cba;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<header class="px-4 d-flex align-items-center py-3 mb-4 border-bottom" style="background-color: #008080;">
    <img src="logo.png" alt="ini gambar logo" width="50">
    <h2 class="ms-3 mb-0">
        <strong style="font-weight: bold;">Learnify:</strong>
        <span style="font-size: 14px; font-family: verdana; font-weight: bold;">Belajar Cerdas, Kuasai Dunia!</span>
    </h2>
</header>

<main class="d-flex justify-content-center">
    <div class="card">
        <div class="card-header text-center" style="font-weight:bold;">Kuis</div>
        <div class="card-body">
            <form action="hasil.php" method="POST">

                <p class="question">1. Apa kepanjangan dari HTML?</p>
                <ul class="options">
                    <li><input type="radio" name="jawaban1" value="Hyper Text Markup Language"> a. Hyper Text Markup Language</li>
                    <li><input type="radio" name="jawaban1" value="Hyperlinks and Text Markup Language"> b. Hyperlinks and Text Markup Language</li>
                    <li><input type="radio" name="jawaban1" value="Home Tool Markup Language"> c.Home Tool Markup Language</li>
                    <li><input type="radio" name="jawaban1" value="Hyper Tool Multi Language"> d.Hyper Tool Multi Language</li>
                </ul>

                <p class="question">2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?</p>
                <ul class="options">
                    <li><input type="radio" name="jawaban2" value="background: red;"> a. background: red;</li>
                    <li><input type="radio" name="jawaban2" value="bgcolor: red;"> b. bgcolor: red;</li>
                    <li><input type="radio" name="jawaban2" value="color-background: red;</"> c. color-background: red;</li>
                    <li><input type="radio" name="jawaban2" value="background-color: red;"> d. background-color: red;</li>
                </ul>

                <p class="question">3. Tag HTML apa yang digunakan untuk membuat baris baru?</p>
                <ul class="options">
                    <li><input type="radio" name="jawaban3" value="newline"> a. newline</li>
                    <li><input type="radio" name="jawaban3" value="hr"> b. hr</li>
                    <li><input type="radio" name="jawaban3" value="line"> c. line</li>
                    <li><input type="radio" name="jawaban3" value="br"> d. br</li>
                </ul>

                <p class="question">4. Apa fungsi utama dari PHP?</p>
                <ul class="options">
                    <li><input type="radio" name="jawaban4" value="Mengatur tata letak halaman web"> a. Mengatur tata letak halaman web</li>
                    <li><input type="radio" name="jawaban4" value="Mengatur tampilan halaman web"> b. Mengatur tampilan halaman web</li>
                    <li><input type="radio" name="jawaban4" value="Memproses data di sisi server"> c. Memproses data di sisi server</li>
                    <li><input type="radio" name="jawaban4" value="Menambahkan animasi ke halaman web"> d. Menambahkan animasi ke halaman web</li>
                </ul>

                <p class="question">5. Bagaimana cara menampilkan gambar di HTML?</p>
                <ul class="options">
                    <li><input type="radio" name="jawaban5" value="img src='gambar.jpg'"> a.img src='gambar.jpg'</li>
                    <li><input type="radio" name="jawaban5" value="image src='gambar.jpg'"> b.image src='gambar.jpg'</li>
                    <li><input type="radio" name="jawaban5" value="pic src='gambar.jpg'"> c.pic src='gambar.jpg'</li>
                    <li><input type="radio" name="jawaban5" value="photo src='gambar.jpg'"> d.photo src='gambar.jpg'</li>
                </ul>
                <div class="button-container" >
                    <button type="submit" class="submit">Kirim Jawaban</button>
                </div>

            </form>
        </div>
    </div>
</main>

</body>
</html>
