<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Load custom CSS -->
    <link rel="stylesheet" href="asset/CSS/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Koleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Peminjaman">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
                <div class="container">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari buku" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero-image">
        <div class="hero-text">
            <h1>Selamat Datang di Perpustakaan Online</h1>
            <p>Temukan dan pinjam buku-buku favoritmu secara online.</p>
            <a href="#" class="btn btn-primary btn-lg">Mulai Cari Buku</a>
        </div>
    </div>

    <div class="container mains pb-5">
        <div class="row">
            <div class="col-md-4">
                <h2>Koleksi Buku</h2>
                <p>Perpustakaan Online menyediakan ribuan judul buku dari berbagai kategori dan genre.</p>
                <a class="btn btn-secondary" href="#" role="button">Lihat Koleksi</a>
            </div>
            <div class="col-md-4">
                <h2>Peminjaman Buku</h2>
                <p>Pinjam buku favoritmu dengan mudah dan cepat melalui Perpustakaan Online.</p>
                <a class="btn btn-secondary" href="#" id="Peminjaman" role="button">Mulai Peminjaman</a>
            </div>
            <div class="col-md-4">
                <h2>Profil Pengguna</h2>
                <p>Kelola informasi profil pengguna, riwayat peminjaman, dan aktivitas pengguna lainnya.</p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Informasi Profil</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Riwayat Peminjaman</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Aktivitas Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mains pb-5">
        <h2>Buku Terbaru</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Buku</h5>
                        <p class="card-text">Deskripsi buku.</p>
                        <a href="#" class="btn btn-primary">Pinjam</a>
                    </div>
                </div>
            </div>
            <!--Tambahkan card untuk buku selanjutnya-->
        </div>
    </div>
    <div class="container mains pb-5">
        <h2>Kategori Buku</h2>
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item active">Semua</li>
                    <li class="list-group-item">Fiksi</li>
                    <li class="list-group-item">Non-fiksi</li>
                    <li class="list-group-item">Biografi</li>
                    <li class="list-group-item">Pendidikan</li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku</h5>
                                <p class="card-text">Deskripsi buku.</p>
                                <a href="#" class="btn btn-primary">Pinjam</a>
                            </div>
                        </div>
                    </div>
                    <!--Tambahkan card untuk buku selanjutnya-->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Buku Populer</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="max-height: 70vh;">
                <div class="carousel-item active">
                    <img src="asset/image/peakpx_ (4).jpg" class="d-block w-100" alt="Buku 1">
                </div>
                <div class="carousel-item">
                    <img src="asset/image/peakpx_ (3).jpg" class="d-block w-100" alt="Buku 2">
                </div>
                <div class="carousel-item">
                    <img src="asset/image/peakpx_ (2).jpg" class="d-block w-100" alt="Buku 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container mains pb-5">
        <h2>Testimonial</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">"Sangat mudah dan cepat untuk meminjam buku di Perpustakaan Online. Saya sangat merekomendasikan."</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Nama Pengguna</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">"Sangat mudah dan cepat untuk meminjam buku di Perpustakaan Online. Saya sangat merekomendasikan."</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Nama Pengguna</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">"Sangat mudah dan cepat untuk meminjam buku di Perpustakaan Online. Saya sangat merekomendasikan."</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Nama Pengguna</small>
                    </div>
                </div>
            </div>
            <!--Tambahkan card untuk testimonial selanjutnya-->
        </div>
    </div>
    <footer class="footer-purple">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Tentang Kami</h4>
                    <p>Kami adalah perpustakaan online yang menyediakan ribuan judul buku untuk Anda.</p>
                </div>
                <div class="col-md-4">
                    <h4>Hubungi Kami</h4>
                    <p>Jl. Pustaka No. 123<br>
                        Telp. (021) 123-456<br>
                        Email: info@perpustakaanonline.com</p>
                </div>
                <div class="col-md-4">
                    <h4>Ikuti Kami</h4>
                    <p>
                        <a href="#">Facebook</a> |
                        <a href="#">Twitter</a> |
                        <a href="#">Instagram</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Load Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>