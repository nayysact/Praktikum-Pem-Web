<?php
include_once("koneksi.php");

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];

// Hapus buku berdasarkan ID
$query = "DELETE FROM tb_buku WHERE id_buku = $id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    // Reset ulang ID agar tetap berurutan
    mysqli_query($conn, "SET @num := 0;");
    mysqli_query($conn, "UPDATE tb_buku SET id_buku = @num := (@num+1);");
    mysqli_query($conn, "ALTER TABLE tb_buku AUTO_INCREMENT = 1;");

    header("Location: index.php?hapus=success");
} else {
    echo "Gagal menghapus buku!";
}
?>
