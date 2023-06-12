<?php



session_start();

if (empty($_SESSION['username'])) {
    echo "<script>alert('Login terlebih dahulu');
        document.location.href = 'login.php'</script>";
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <script>
        function pindaHalamanReservasi(){
            window.location.href ="reservasi.php";
        }
    </script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="#">
                <p> Batik Jetis</p>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="reservasi.php">Reservasi</a></li>
                <li><a href="beranda.php">Home</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="galeri.php">Galeri Batik</a></li>
                <li><a href="pengrajin.php">Pengrajin</a></li>
                <li><a href="#">About</a></li>
                <li><a href="cek-logout.php">Logout</a></li>
            </ul>
        </nav>

    </div>
    <div class="home">
        <div class="image">
            <img src="Membatik_indonesia-removebg-preview.png" alt="Gambar" width="600">
        </div>
        <div class="header">
            <h1>Batik Jetis <span>Sidoarjo</span></h1>
        </div>
        <div class="content-header">
            <p>Batik adalah salah satu ciri yang khas setiap daerah namun di setiap daerah memiliki berbagai macam-macam
                batik yang menarik dan bermacammacam motif di salah satu kota di Sidoarjo (Yuniartirt al., 2018).
                Kabupaten Sidoarjo terletak di sebelah selatan kota Surabaya, terkenal dengan kerupuk udang, terasi,
                petis dan ikan bandengnya. Sejak terjadinya bencana luapan lumpur Lapindo, masyarakat Indonesia bahkan
                dunia kini tidak merasa asing dengan Kabupaten Sidoarjo. Seperti daerah pesisir lainnya, sebagian
                masyarakat Sidoarjo juga merupakan pengerajin batik tulis (Dave, 2014).</p>
        </div>
    </div>
    <div class="box-reservasi">
        <h1>Reservasi Kunjungan</h1>
        <p>Kunjungi museum sekarang juga untuk mendapatkan pengalaman lebih</p>
        <button onclick="pindaHalamanReservasi()" class="button-reservasi">Reservasi Kunjungan</button>
    </div>
    <div class="artikel-beranda">
        <h1>Artikel</h1>
        <img src="mm.png" alt="gambar mega mendung">
        <a href="#">Lihat lebih banyak</a>
    </div>
    <div class="row">
                    </div>
                </div>
            </div>

    </div>
    <div class="footer">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2023 Nama Perusahaan. Hak Cipta Dilindungi.</p>
            </div>
            <div class="col-md-6">
                <ul class="footer-menu">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Galeri Batik</a></li>
                    <li><a href="#">Pengrajin</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <button class="btn btn-primary reservasi-button">Reservasi Kunjungan</button>
            </div>
        </div>
    </div>
</body>
</html>