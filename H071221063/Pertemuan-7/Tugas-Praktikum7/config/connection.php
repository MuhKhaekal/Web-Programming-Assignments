<?php

    //koneksi database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "crud_mahasiswa";

    //buat koneksi
    $connection = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($connection));
?>