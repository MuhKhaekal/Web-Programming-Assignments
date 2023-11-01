<?php 
// session_start();

// if( !isset($_SESSION["login"]) ) {
// 	header("Location: login.php");
// 	exit;
// }

require 'functions.php';
$user = query("SELECT * FROM user");

// tombol cari ditekan
// if( isset($_POST["cari"]) ) {
// 	$user = cari($_POST["keyword"]);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="logout.php">Logout</a>

    <h1>Daftar User</h1>

    <!-- <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br> -->

    <!-- <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
        
    </form> -->

    <br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $user as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapusUser.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td><?= $row["username"]; ?></td>
            <td><?= $row["password"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>

</body>

</html>