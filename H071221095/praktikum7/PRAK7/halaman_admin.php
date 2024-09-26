<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        .input-group {
            display: flex;
            flex-direction: row;
            margin: 8px 0;
            align-items: center;
        }

        .input-group label {
            display: flex;
            justify-content: space-between;
            min-width: 216px;
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <h1>Admin Page</h1>
    <hr>

    <form method="post">
        <h3>Create data</h3>
        <input type="hidden" name="action" value="tambah">
        <div class="input-group">
            <label for="nama">Nama<span>:</span></label>
            <input type="text" name="nama" required>
        </div>
        <div class="input-group">
            <label for="nim">NIM<span>:</span></label>
            <input type="text" name="nim" required>
        </div>
        <div class="input-group">
            <label for="prodi">Prodi<span>:</span></label>
            <input type="text" name="prodi" required>
        </div>
        <div class="input-group">
            <button type="submit">Create Data</button>
        </div>
    </form>
    <br>


    <form method="post">
        <h3>Read Data</h3>
        <input type="hidden" name="action" value="tampil">
        <button type="submit">Show Data</button>
    </form>
    <br>

    <form method="post">
        <h3>Update Data</h3>
        <input type="hidden" name="action" value="perbarui">
        <div class="input-group">
            <label for="id">ID Data<span>:</span></label>
            <input type="text" name="id" required>
        </div>
        <div class="input-group">
            <label for="nama">Nama<span>:</span></label>
            <input type="text" name="nama" required>
        </div>
        <div class="input-group">
            <label for="nim">NIM<span>:</span></label>
            <input type="text" name="nim" required>
        </div>
        <div class="input-group">
            <label for="prodi">Prodi<span>:</span></label>
            <input type="text" name="prodi" required>
        </div>
        <div class="input-group">
            <button type="submit">Update Data</button>
        </div>
    </form>
    <br>


    <form method="post">
        <h3>Delete Data</h3>
        <input type="hidden" name="action" value="hapus">
        <div class="input-group">
            <label for="id">ID Data<span>:</span></label>
            <input type="text" name="id" required><br>
        </div>
        <div class="input-group">
            <button type="submit">Delete Data</button>
        </div>
    </form>
    <br>


    <?php
    $server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "db_mahasiswa";

    session_start();
    if ($_SESSION["role"] != "admin") {
        header("Location: halaman_mahasiswa.php");
    }

    function tambahData($nama, $nim, $prodi)
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Your connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO tb_mahasiswa (Nama, NIM, Prodi) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nama, $nim, $prodi);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    // Fungsi Read (Select)
    function ambilDataMahasiswa()
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Your connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT  id, Nama, NIM, Prodi FROM tb_mahasiswa";
        $result = $conn->query($sql);

        $data = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $conn->close();
        return $data;
    }

    // Menampilkan data dalam bentuk tabel HTML
    function tampilkanTabelMahasiswa()
    {
        $dataMahasiswa = ambilDataMahasiswa();

        echo '<table border="1">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Nama</th>';
        echo '<th>NIM</th>';
        echo '<th>Prodi</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($dataMahasiswa as $row) {
            echo '<tr>';
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['Nama']}</td>";
            echo "<td>{$row['NIM']}</td>";
            echo "<td>{$row['Prodi']}</td>";
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }

    // Fungsi Update
    function perbaruiData($id, $nama, $nim, $prodi)
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Your connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE tb_mahasiswa SET Nama=?, NIM=?, Prodi=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nama, $nim, $prodi, $id);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    // Fungsi Delete
    function hapusData($id)
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Your connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM tb_mahasiswa WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    // Menangani Form Submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["action"])) {
            $action = $_POST["action"];

            switch ($action) {
                case 'tambah':
                    if (isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"])) {
                        tambahData($_POST["nama"], $_POST["nim"], $_POST["prodi"]);
                    } else {
                        echo "Fill the blank!";
                    }
                    break;

                case 'tampil':
                    tampilkanTabelMahasiswa();
                    break;

                case 'perbarui':
                    if (isset($_POST["id"]) && isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"])) {
                        perbaruiData($_POST["id"], $_POST["nama"], $_POST["nim"], $_POST["prodi"]);
                    } else {
                        echo "Fill the blank!";
                    }
                    break;

                case 'hapus':
                    if (isset($_POST["id"])) {
                        hapusData($_POST["id"]);
                    } else {
                        echo "ID doesn't match!";
                    }
                    break;

                default:
                    echo 'action does not valid';
                    break;
            }
        }
    }
    ?>