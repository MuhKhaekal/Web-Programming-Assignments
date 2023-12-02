<?php

// Variabel Koneksi Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_pengguna";

// Variabel Validasi Formulir
$required = 'required';
$vnama = "";
$vnim = "";
$vprodi = "";
$vpassword = "";
$vllpass = "";
$vlbpass = "";
$vpengguna = "-Pilih-";
$vledit = "";

// Koneksi Database
$conn = mysqli_connect($servername, $username, $password, $database);

// Mengecek Koneksi
if (!$conn) {
    die("Koneksi gagal: ". mysqli_connect_error());
}

?>