<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="no_2.php" method="POST">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" required>
        <br>

        <label for="usia">Usia</label>
        <input type="number" name="usia" required>
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" required>
        <br>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" required>
        <br>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <div>
            <input type="radio" name="jenis_kelamin" value="Laki-laki">
            <label for="jenis_kelamin">Laki-laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="jenis_kelamin">Perempuan</label>
        </div>
        <br>

        <label for="bahasa">Bahasa yang dikuasai</label>
        <div>
            <input type="checkbox" name="bahasa[]" value="Java" id="java">
            <label for="java">Java</label>
            <input type="checkbox" name="bahasa[]" value="Python" id="python">
            <label for="python">Python</label>
            <input type="checkbox" name="bahasa[]" value="HTML" id="html">
            <label for="html">HTML</label>
            <input type="checkbox" name="bahasa[]" value="CSS" id="css">
            <label for="css">CSS</label>
            <input type="checkbox" name="bahasa[]" value="JavaScript" id="javascript">
            <label for="javascript">JavaScript</label>
            <input type="checkbox" name="bahasa[]" value="PHP" id="php">
            <label for="php">PHP</label>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form> <br>

    <?php
    if (isset($_POST['submit'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $usia = $_POST['usia'];
        $email = $_POST['email'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        echo "<p>Halo perkenalkan nama saya $nama_lengkap, saya berumur $usia tahun, saya lahir pada tanggal $tanggal_lahir, saya berjenis kelamin $jenis_kelamin dan saat ini saya ";

        if (isset($_POST['bahasa'])) {
            echo "menguasai bahasa pemrograman ";
            $bahasa_length = count($_POST['bahasa']);

            for ($i = 0; $i < $bahasa_length; $i++) {
                $item = $_POST['bahasa'][$i];
                if ($i < $bahasa_length - 1) {
                    echo "$item, ";
                } else if ($i == $bahasa_length - 1 && $bahasa_length > 1) {
                    echo "dan $item";
                }
            }
        } else {
            echo "belum menguasai bahasa pemrograman apapun";
        }
        echo ".</p>";
    }
    ?>
</body>

</html>