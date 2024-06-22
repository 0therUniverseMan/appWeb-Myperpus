<?php
require('Perpustakaan.php');

if (isset($_GET['kode'])) {
    $Lib = new Perpustakaan();
    $book = $Lib->editBook($_GET['kode']);
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Book</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">PerpusKu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Input Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php">List Buku</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
        <div class="container mt-5">
        <a href="home.php" class="float-right btn btn-success">Kembali ke Home</a>
            <h2>Edit Book</h2>
            <form action="edit.php" method="POST" class="form-group">
                 <input type="hidden" name="kode" value="' . $book->kodeBuku . '" class="form-control"><br>
                Judul Buku: <input type="text" name="judul" value="' . $book->judulBuku . '" class="form-control"><br>
                Pengarang Buku: <input type="text" name="pengarang" value="' . $book->pengarang . '" class="form-control"><br>
                Penerbit Buku: <input type="text" name="penerbit" value="' . $book->penerbit . '" class="form-control"><br>
                <input type="submit" name="updateBook" value="Update" class="btn btn-info">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.6.1/dist/umd/popper.min.js" integrity="sha384-dpwnEj3n8Z5MUwLH+7bFj6BEYJtwWjLn9L+V56UEaHE2g2j7WWhkO1dj7VxrIhD+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        </body>
        </html>
        ';
}

if (isset($_POST['updateBook'])) {
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $Lib = new Perpustakaan();
    $upd = $Lib->updateBook($kode, $judul, $pengarang, $penerbit);
    if ($upd == "Success") {
        header('Location: list.php');
    }
}
