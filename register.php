<?php
include "service/database.php";
session_start();

$register_message = "";

if(isset($_SESSION["is_login"])){
    header("location: dashboard.php");
}


if(isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_password = hash("sha256", $password);

    try {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
    
        if($db->query($sql)) {
            $register_message = "daftar akun berhasil, silahkan login";
        } else {
            $register_message = "daftar akun gagal, silahkan coba lagi";
        }
    } catch (mysqli_sql_exception) {
        $register_message = "username sudah ada, silahkan ganti yang lain";

    }
    $db->close();


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
    try {
        if (!@include("layout/header.html")) {
            throw new Exception("Gagal memuat header.");
        }
    } catch (Exception $e) {
        echo "<p style='color: red;'>".$e->getMessage()."</p>";
    }
    ?>

    <h3>DAFTAR AKUN</h3>
    <i><?= $register_message ?></i>

    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>

    <?php
    try {
        if (!@include("layout/footer.html")) {
            throw new Exception("Gagal memuat footer.");
        }
    } catch (Exception $e) {
        echo "<p style='color: red;'>".$e->getMessage()."</p>";
    }
    ?>
</body>
</html>
