<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="alert alert-success text-center">
        <h2>TAMBAH DATA BUKU</h2>
    </div>

    <div class="container">
        <form method="post" action="prosestambahbuku.php">
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
