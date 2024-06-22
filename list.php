<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List Book</title>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Input Buku</a>
                    </li>
                    <li class="nav-item active">
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
        <h2>Daftar Buku yang Tersedia</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <colgroup>
                        <col span="1" style="background-color: #D7AEEE; width: 110px;">
                        <col span="1">
                        <col span="1" style="min-width: 180px;">
                        <col span="1">
                        <col span="1" style="min-width: 180px; ">
                    </colgroup>
                    <tr class="bg-dark text-light">
                        <th colspan="1">Kode Buku</th>
                        <th colspan="1">Judul Buku</th>
                        <th colspan="1">Pengarang Buku</th>
                        <th colspan="1">Penerbit Buku</th>
                        <th colspan="1" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("Perpustakaan.php");
                    $Lib = new Perpustakaan();
                    $books = $Lib->showBooks();
                    if (!empty($books)) {
                        foreach ($books as $book) {
                            $kodeBuku = $book->kodeBuku ?? $book['kodeBuku'];
                            $judulBuku = $book->judulBuku ?? $book['judulBuku'];
                            $pengarang = $book->pengarang ?? $book['pengarang'];
                            $penerbit = $book->penerbit ?? $book['penerbit'];
                    ?>
                            <tr>
                                <td colspan="1" class="text-center"><?= $kodeBuku ?></td>

                                <td colspan="1"><?= $judulBuku ?></td>
                                <td colspan="1"><?= $pengarang ?></td>
                                <td colspan="1"><?= $penerbit ?></td>

                                <td colspan="1" class="px-4">
                                    <a class="btn btn-info" href="edit.php?kode=<?= $kodeBuku ?>">Edit</a>

                                    <a class="btn btn-danger delete-btn" href="delete.php?delete=<?= $kodeBuku ?>">Delete</a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<tr><td colspan="5">Tidak ada data buku</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="home.php" class="btn btn-success">Tambah Buku Baru</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>