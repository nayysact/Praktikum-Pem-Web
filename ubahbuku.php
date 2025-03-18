<?php
include_once("koneksi.php");

$id = $_GET['id'];
$query = "SELECT * FROM tb_buku WHERE id_buku = $id";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="alert alert-success text-center">
        <h2>UBAH DATA BUKU</h2>
    </div>

    <div class="container">
        <form method="post" action="prosesubahbuku.php">
            <div class="form-group">
                <label>ID Buku</label>
                <input type="text" name="id_buku" class="form-control" value="<?= $data['id_buku']; ?>" readonly>
            </div>

            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul" class="form-control" value="<?= $data['judul_buku']; ?>" required>
            </div>

            <div class="form-group">
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="<?= $data['pengarang']; ?>" required>
            </div>

            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" value="<?= $data['tahun_terbit']; ?>" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?= $data['kategori']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
