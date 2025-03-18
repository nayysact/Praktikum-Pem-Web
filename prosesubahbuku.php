<?php
include_once("koneksi.php");

$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

$query = "UPDATE tb_buku SET judul_buku='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', kategori='$kategori' WHERE id_buku=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
