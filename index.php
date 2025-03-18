<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koleksi Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus buku ini?")) {
                window.location.href = "hapusbuku.php?id=" + id;
            }
        }
    </script>
</head>
<body>
    <div class="alert alert-success text-center">
        <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
    </div>

    <div class="container">
        <a href="tambahbuku.php" class="btn btn-primary mb-3">Tambah Buku</a>

        <table class="table table-bordered text-center">
            <thead class="thead-light">
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                    <tr>
                        <td><?= $data['id_buku']; ?></td>
                        <td><?= $data['judul_buku']; ?></td>
                        <td><?= $data['pengarang']; ?></td>
                        <td><?= $data['tahun_terbit']; ?></td>
                        <td><?= $data['kategori']; ?></td>
                        <td>
                            <a href="ubahbuku.php?id=<?= $data['id_buku']; ?>" class="text-primary text-decoration-none">Edit</a> | 
                            <a href="#" onclick="confirmDelete(<?= $data['id_buku']; ?>)">Delete</a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
