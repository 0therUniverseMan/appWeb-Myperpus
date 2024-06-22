<?php
require('Perpustakaan.php');

$perpustakaan = new Perpustakaan();

if (isset($_POST['addBook'])) {
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $perpustakaan->addBook($kode, $judul, $pengarang, $penerbit);

    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <div class="container mt-5 text-center">
    <h3><strong>Berhasil !</strong></h3> 
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
if (isset($_POST['searchBook'])) {
    $search = $_POST['search'];
    $results = $perpustakaan->searchBook($search);
}
?>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
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
        <h2>Tambah Buku</h2>
        <form method="post" action="home.php" class="form-group row">
            <label for="kode">Kode Buku:</label>
            <input class="form-control" type="number" min="9999" id="kode" name="kode" required>

            <label for="judul">Judul Buku:</label>
            <input class="form-control" type="text" id="judul" name="judul" required>

            <label for="pengarang">Pengarang:</label>
            <input class="form-control" type="text" id="pengarang" name="pengarang" required>

            <label for="penerbit">Penerbit:</label>
            <input class="form-control" type="text" id="penerbit" name="penerbit" required>

            <input class="btn btn-primary" type="submit" name="addBook" value="Tambah Buku">
            <a href="list.php" class="btn btn-info" style="position: relative; left:10px;">Lihat List</a>
        </form>


        <!-- Tampilkan hasil pencarian -->
        <?php if (isset($_POST['searchBook'])) { ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <h2>Hasil Pencarian</h2>

                <?php if (empty($results)) { ?>

                    <p>Tidak ada buku yang ditemukan dengan kata kunci <strong>"<?php echo $search; ?>"</strong>
                    </p>
                <?php } else { ?>

                    <table>

                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                        </tr>
                        <?php foreach ($results as $results) : ?>
                            <tr>
                                <td><?php echo $results->kodeBuku; ?></td>
                                <td><?php echo $results->judulBuku; ?></td>
                                <td><?php echo $results->pengarang; ?></td>
                                <td><?php echo $results->penerbit; ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
            </div>
        <?php } ?>
    <?php }  ?>

    <h2>Cari Buku</h2>
    <form method="post" action="home.php">
        <label for="search">Kata Kunci:</label>
        <input class="form-control" type="text" id="search" name="search" required>

        <input class="btn btn-info" type="submit" name="searchBook" value="Cari Buku">
    </form>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.6.1/dist/umd/popper.min.js" integrity="sha384-dpwnEj3n8Z5MUwLH+7bFj6BEYJtwWjLn9L+V56UEaHE2g2j7WWhkO1dj7VxrIhD+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>