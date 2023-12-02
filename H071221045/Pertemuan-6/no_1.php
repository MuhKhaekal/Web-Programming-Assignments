<?php

$data = [
    [
        "nama_barang" => "HP",
        "harga" => 3000000,
        "stok" => 10,
        "jenis" => "Elektronik"
    ],
    [
        "nama_barang" => "Jeruk",
        "harga" => 5000,
        "stok" => 20,
        "jenis" => "Buah"
    ],
    [
        "nama_barang" => "Kemeja",
        "harga" => 5000,
        "stok" => 9,
        "jenis" => "Pakaian"
    ],
    [
        "nama_barang" => "Apel",
        "harga" => 5000,
        "stok" => 5,
        "jenis" => "Buah"
    ],
    [
        "nama_barang" => "Celana",
        "harga" => 5000,
        "stok" => 10,
        "jenis" => "Pakaian"
    ],
    [
        "nama_barang" => "Laptop",
        "harga" => 50000,
        "stok" => 30,
        "jenis" => "Elektronik"
    ],
    [
        "nama_barang" => "Semangka",
        "harga" => 5000,
        "stok" => 2,
        "jenis" => "Buah"
    ],
    [
        "nama_barang" => "Kaos",
        "harga" => 5000,
        "stok" => 1,
        "jenis" => "Pakaian"
    ],
    [
        "nama_barang" => "VGA",
        "harga" => 2000000,
        "stok" => 0,
        "jenis" => "Elektronik"
    ]
];

if (isset($_GET["tipe"])) {
    $tipe = $_GET["tipe"];
    $data = array_filter($data, function ($item) use ($tipe) {
        return $item["jenis"] == $tipe;
    });
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="no_1.php">
        <input type="text" placeholder="Masukkan tipe" name="tipe">
        <button type="submit">Submit</button>
    </form>
    <br>

    <?php
    if (isset($_GET["tipe"])) {
        echo "<h2>Daftar Barang $_GET[tipe] </h2>";
        echo "<a href=\"no_1.php\">Clear</a>";
        echo "<br>";
        echo "<br>";
    }
    ?>

    <table border="2">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $key => $value) {
                echo "<tr>";
                echo "<td>" . $value["nama_barang"] . "</td>";
                echo "<td>" . $value["stok"] . "</td>";
                echo "<td>" . $value["harga"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>