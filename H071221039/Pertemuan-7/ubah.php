<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<div class="container-ubah">
		<h1>Ubah data mahasiswa</h1>

		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
			<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
			<ul>
				<li>
					<label for="nim">NIM : </label><br>
					<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
				</li>
				<li>
					<label for="nama">Nama : </label><br>
					<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
				</li>
				<li>
					<label for="email">Email :</label><br>
					<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
				</li>
				<li>
					<label for="prodi">Prodi :</label><br>
					<input type="text" name="prodi" id="prodi" value="<?= $mhs["prodi"]; ?>">
				</li>
				<li>
					<label for="gambar">Gambar :</label>
					<img src="img/<?= $mhs['gambar']; ?>" width="80"> <br>
					<input type="file" name="gambar" id="gambar">
				</li>
				<li>
					<button type="submit" name="submit" id="ubah">Ubah Data!</button>
				</li>
			</ul>

		</form>
	</div>
</body>
</html>