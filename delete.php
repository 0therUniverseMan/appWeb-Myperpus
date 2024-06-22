<?php
require_once("Perpustakaan.php");
$Lib = new Perpustakaan();
$Lib->deleteBook($_GET['delete']);
