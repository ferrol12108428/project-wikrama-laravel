@extends('layouts.main')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Wikrama School </title>
    <link rel="stylesheet" href="wikrama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <section>
        <header>
            <h2><a href="#" class="Logo"></a> <img src="{!! asset('assets/img/book.png') !!}"></h2>
            <div class="navigation">
                <a href="home">Home</a>
                <a href="kantin">Kantin </a>
                <a href="matrikulasi">Matrikulasi</a>
                <a href="perpustakaan">Perpustakaan</a>
                <a href="peraturan">Peraturan</a>
        </div>
        </header>
        <div class="content">
            <div class="Info">
                <h2><br><span>Perpustakaan</span></h2>
                <p>Perpustakaan SMK Wikrama Bogor berada di Kampus SMK Wikrama Bogor Kelurahan Sindangsari, 
                    Kecamatan Bogor Timur, Kota Bogor didirikan pada tahun 1996. Secara fisik perpustakaan sekolah terletak
                     di lantai 2 (dua) gedung Pajajaran yang merupakan gedung pertama yang dibangun, Semenjak didirikan,
                      keberadaan ruang perpustakaan SMK Wikrama Bogor memberikan manfaat bagi sivitas akademik sekolah bahkan masyarakat sekitar sekolah.</p>
            </div>
        </div>
        <br>
        <div class="media-icons">
            <a target="blank" href="https://instagram.com/smkwikrama?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
            <a target="blank" href="https://web.facebook.com/smkwikrama"><i class="fab fa-facebook-square"></i></i></a>
        </div>
    </section>

</body>
</html> 