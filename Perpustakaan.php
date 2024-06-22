<?php

class Perpustakaan
{
    private $db;
    public $kodeBuku, $judulBuku, $pengarang, $penerbit;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=perpustakaan', 'root', '');
    }

    public function addBook($kode, $judul, $pengarang, $penerbit)
    {
        $sql = "INSERT INTO books (kodeBuku, judulBuku, pengarang, penerbit) VALUES(:kode, :judul, :pengarang, :penerbit)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':kode', $kode);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':pengarang', $pengarang);
        $stmt->bindParam(':penerbit', $penerbit);
        $result = $stmt->execute();

        if (!$result) {
            throw new Exception("Failed to add book");
        } else {
            echo "<meta http-equiv='refresh' content='0; URL=home.php'>";
            return $result;
        }
    }

    public function editBook($kode)
    {
        $sql = "SELECT * FROM books WHERE kodeBuku = :kode";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':kode', $kode);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function showBooks()
    {
        $sql = "SELECT * FROM books";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateBook($kode, $judul, $pengarang, $penerbit)
    {
        $sql = "UPDATE books SET judulBuku=:judul, pengarang=:pengarang, penerbit=:penerbit WHERE kodeBuku=:kode";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':kode', $kode);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':pengarang', $pengarang);
        $stmt->bindParam(':penerbit', $penerbit);
        $result = $stmt->execute();

        if (!$result) {
            throw new Exception("Failed to update book");
        } else {
            echo "<meta http-equiv='refresh' content='0; URL=list.php'>";
        }
    }

    public function deleteBook()
    {
        if (isset($_GET['delete'])) {
            $kode = $_GET['delete'];
            try {
                $db = new PDO("mysql:host=localhost;dbname=perpustakaan", 'root', '');

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "DELETE FROM books WHERE kodeBuku=:kode";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':kode', $kode);
                $stmt->execute();

                header('location: list.php');
                echo "<meta http-equiv='refresh' content='0'>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            } finally {
                $db = null;
            }
        }
    }

    public function searchBook($search)
    {
        $sql = "SELECT * FROM books WHERE kodeBuku LIKE '%$search%' OR judulBuku LIKE '%$search%' OR pengarang LIKE '%$search%' OR penerbit LIKE '%$search%'";
        $result = $this->db->query($sql);
        $books = array();
        if ($result) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $book = new Perpustakaan();
                $book->kodeBuku = $row['kodeBuku'];
                $book->judulBuku = $row['judulBuku'];
                $book->pengarang = $row['pengarang'];
                $book->penerbit = $row['penerbit'];
                array_push($books, $book);
            }
            return $books;
        } else {
            return null;
        }
    }
}
