<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

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
    <h1 class=>Registration Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()">
        <div class="input-group">
            <label for="username">Username<span>:</span></label>
            <input type="text" placeholder="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="role">Peran<span>:</span></label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="mahasiswa">Mahasiswa</option>
            </select>
        </div>
        <div class="input-group">
            <label for="password">Password<span>:</span></label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="confirm_password">Konfirmasi Password<span>:</span></label>
            <input type="password" placeholder="confirm_password" name="confirm_password" required><br>
        </div>
        <div class="input-group">
            <button type="submit">Daftar</button><br>
        </div>
        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password != confirm_password) {
                alert("Konfirmasi password tidak sesuai!");
                return false;
            }

            return true;
        }
    </script>

    <?php
    //server method untuk akses informasi 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
        $role = $_POST["role"];

        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_mahasiswa";
        
        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Your connection failed: " . $conn->connect_error);
        }

        // memproses hasil query dgn mysqli
        $check_query = "SELECT * FROM users WHERE username = ?"; 
        $check_statement = $conn->prepare($check_query); 
        $check_statement->bind_param("s", $username); 
        $check_statement->execute();
        $result = $check_statement->get_result(); 

        if ($result->num_rows > 0) { 
            echo "Username has already been taken.";
        } else {
            $insert_query = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)"; 
            $insert_statement = $conn->prepare($insert_query);
            $insert_statement->bind_param("sss", $username, $password, $role);

            if ($insert_statement->execute()) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $insert_statement->error;
            }
        }

        $check_statement->close();
        $insert_statement->close();
        $conn->close();
    }
    ?>


</body>

</html>