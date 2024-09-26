<?php

// mengimpor (include) file connect.php
include 'connection/connect.php';

// memulai atau mengaktifkan sesi PHP. 
session_start();


if (isset($_POST['submit'])) {  //Kode ini memeriksa apakah formulir telah disubmit. 
    // Variabel $nim digunakan untuk menyimpan NIM
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);  // digunakan untuk mengamankan input pengguna dari injeksi SQL.
    // Variabel $nim digunakan untuk menyimpan NIM
    $pass = $_POST['password']; 

    // menjalankan kueri SQL untuk mencari baris dalam tabel tb_pengguna di database yang memiliki NIM
    $select = " SELECT * FROM tb_pengguna WHERE nim = '$nim'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        if (password_verify($pass, $row['password'])) {
            if ($row['tipe_pengguna'] == 'admin') {
    
                $_SESSION['nama_admin'] = $row['nama'];
                $_SESSION['pengguna'] = $row['tipe_pengguna'];
                header('location:index.php');
            } else if ($row['tipe_pengguna'] == 'mahasiswa') {
    
                $_SESSION['nama_mahasiswa'] = $row['nama'];
                $_SESSION['pengguna'] = $row['tipe_pengguna'];
                header('location:mahasiswa.php');
            }
        } else {
            $error[] = 'NIM atau kata sandi salah!';    
        }
    } else {
        $error[] = 'NIM atau kata sandi salah!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Custom css file link -->
    <link rel="stylesheet" href="css/loginStyle.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">

            <h3>Login</h3>

            <input type="text" name="nim" required placeholder="Masukkan NIM anda">
            <input type="password" name="password" required placeholder="Masukkan Password anda">

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>

            <input type="submit" name="submit" value="Login Sekarang" class="form-btn">
            <p>belum memiliki akun? <a href="regist.php">registrasi sekarang</a></p>
        </form>
    </div>
</body>

</html>