<?php

require_once('config/helper.php');
require_once('config/connection.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
    $action = $_POST["action"];

    if ($action === BASE_URL . 'login_admin.php') {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = mysqli_query($connection, "SELECT * FROM tb_adm WHERE username = '$username' AND password = '$password'");

        if (mysqli_num_rows($query) == 1) {
            header("location: " . BASE_URL . 'admin.php');
        } else {
            header("location: " . BASE_URL . 'login.php?process=failedlogin');
        }
    } elseif ($action === BASE_URL . 'login_mahasiswa.php') {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = mysqli_query($connection, "SELECT * FROM tb_mahasiswa WHERE username = '$username' AND password = '$password'");

        if (mysqli_num_rows($query) == 1) {
            header("location: " . BASE_URL . 'mahasiswa.php');
        } else {
            header("location: " . BASE_URL . 'login.php?process=failedlogin');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style.css' ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg> -->

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Login</div>
                <?php if ($process === 'failedlogin'): ?>
                    <div class="alert alert-danger"
                        style="background-color: red; margin-top: 10px; padding: 1em; color: white; border-radius: 20px; text-align: center;">
                        Login Gagal</div>
                <?php endif; ?>
                <div class="card-body">
                    <?php if ($process == 'successregister'): ?>
                        <div class="alert alert-success"
                            style="background-color: green; padding: 1em; color: white;border-radius: 20px;">
                            Register berhasil, silahkan masuk dengan akun anda
                        </div>
                    <?php endif; ?>
                    <form class="form-login" method="POST">
                        <label class="form-label">Username</label>
                        <input type="username" name="username" class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-input">
                        <div class="button-container">
                            <button type="submit" name="action" value="<?= BASE_URL . 'login_admin.php' ?>"
                                class="btn btn-login">Login Admin</button>
                            <button type="submit" name="action" value="<?= BASE_URL . 'login_mahasiswa.php' ?>"
                                class="btn btn-login">Login Mahasiswa</button>
                        </div>
                    </form>

                    <p style="text-align: center;">Belum punya akun? <br> <span>
                            <div class="a-container">
                                <a href="<?= BASE_URL . "registeradm.php" ?>" class=""> Daftar sebagai admin</a> <br>
                                <a href="<?= BASE_URL . "registermhs.php" ?>" class=""> Daftar sebagai mahasiswa</a>
                            </div>
                        </span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>