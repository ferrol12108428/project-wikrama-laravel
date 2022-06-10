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
            <h2><a href="#" class="Logo"></a> <img src="{!! asset('assets/img/kantin.jpg') !!}"></h2>
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
                <h2><br><span>Kantin</span></h2>
                <p>SMK WIKRAMA BOGOR - Kantin Wikrama berdiri tahun 2004. Namun, di tahun 2017 kantin mulai berbenah diri menjadi kantin sehat. Predikat kantin sehat tersebut dinobatkan langsung oleh Dinas Kesehatan Kota Bogor setelah melakukan penilaian terhadap kantin Wikrama di tahun 2017. Hal tersebut karena, SMK Wikrama melihat sebagian besar aktivitas peserta didik berada di lingkungan sekolah, sehingga sudah menjadi tanggung jawab warga
                     sekolah untuk memperhatikan kesehatan peserta didiknya, mulai dari makanan. 
                     Berbagai aspek penunjang kesehatan peserta didik sangat diperhatikan, mulai dari cara pengolahan makan,
                      sarana yang digunakan, penjamah (pelayan) makanan, kebersihan tempat, serta perilaku konsumen.
                       Menu makanan yang dijajakan di kantin sehat SMK Wikrama sangat beragam. Beberapa makanan yang diproduksi koki 
                       Wikrama antara lain, makanan berat (nasi dan berbagai lauknya), soto, mie ayam, dan sebagainya</p>
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