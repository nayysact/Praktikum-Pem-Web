<?php
include_once("koneksi.php");

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

$query = "INSERT INTO tb_buku (judul_buku, pengarang, tahun_terbit, kategori) VALUES ('$judul', '$pengarang', '$tahun_terbit', '$kategori')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
