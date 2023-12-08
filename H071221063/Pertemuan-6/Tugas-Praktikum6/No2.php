<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Nomor 2</title>
</head>
<body>
    <form method="post" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="usia">Usia:</label>
        <input type="number" name="usia" id="usia" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" required>
        <label for="perempuan">Perempuan</label><br>

        <label for="bahasa">Bahasa yang Dikuasai:</label>
        <input type="checkbox" name="bahasa[]" value="java" id="java">
        <label for="java">java</label>
        <input type="checkbox" name="bahasa[]" value="python" id="python">
        <label for="python">python</label>
        <input type="checkbox" name="bahasa[]" value="HTML" id="html">
        <label for="html">HTML</label>
        <input type="checkbox" name="bahasa[]" value="CSS" id="css">
        <label for="css">CSS</label>
        <input type="checkbox" name="bahasa[]" value="javaScript" id="javaScript">
        <label for="javaScript">JavaScript</label>
        <input type="checkbox" name="bahasa[]" value="PHP" id="php">
        <label for="php">PHP</label>

        <input type="submit" value="submit">
    </form>

    <?php
    $nama = "";
    $usia = "";
    $tgl_lahir = "";
    $jenis_kelamin = "";
    $bahasa_dikuasai = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $email = $_POST['email'];
        $tgl_lahir = date("d F Y", strtotime($_POST['tgl_lahir']));
        $jenis_kelamin = $_POST['jenis_kelamin'];

        if (isset($_POST['bahasa'])) {
            $bahasa_dikuasai = implode(", ", $_POST['bahasa']);
            echo "Halo! Perkenalkan nama saya $nama, saya berumur $usia tahun, saya lahir pada tanggal $tgl_lahir, saya berjenis kelamin $jenis_kelamin dan saat ini saya berhasil menguasai bahasa pemrograman $bahasa_dikuasai.";
        } else {
            echo "Halo! Perkenalkan nama saya $nama, saya berumur $usia tahun, saya lahir pada tanggal $tgl_lahir, saya berjenis kelamin $jenis_kelamin dan saat ini saya belum menguasai bahasa pemrograman apapun.";
        }
    }
    ?>
</body>
</html>