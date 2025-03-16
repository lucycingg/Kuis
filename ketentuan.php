<!doctype html>
<html lang="en">
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
        .submit {
            background-color: #008cba;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;
            display: inline-block;
        }
        ul{
            list-style-type: none;
            padding-left: 10px;
        }
        li{
            padding: 5px;
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
        
    <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 500px;">
        <div class="card-header text-center" style="font-weight: bold;">Ketentuan kuis</div>
        <div class="card-body">
            <h5>Ketentuan Untuk Mengerjakan Kuis:</h5>
            <ul>
                <li>1. Kuis terdiri dari 5 pertanyaan.</li>
                <li>2. Setiap pertanyaan memiliki 4 pilihan jawaban.</li>
                <li>3. Pilihlah satu jawaban yang menurut Pengguna benar.</li>
                <li>4. Setiap jawaban benar akan mendapatkan 20 poin.</li>
                <li>5. Jawaban yang salah tidak akan mendapatkan poin.</li>
                <li>6. Pengguna dapat melihat skor akhir setelah menyelesaikan kuis.</li>
            </ul>
            <div class="d-flex justify-content-end">
                    <a href="kuis.php" class="submit">Mulai Mengerjakan Kuis!</a>
                </div>
        </div>
    </div>
</body>
</html>