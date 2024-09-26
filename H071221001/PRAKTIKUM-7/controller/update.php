<?php 


require_once('../config/helper.php');
require_once('../config/connection.php');


if (isset($_POST['submitubah'])) {
    $update = mysqli_query($connection, "UPDATE tb_admin SET 
                                                            nim = '$_POST[tnim]',
                                                            namalengkap = '$_POST[tnama]',
                                                            jurusan = '$_POST[tjurusan]'
                                                        WHERE ID = '$_POST[ID]'
                                                            ");

    if($update){
        echo "<script>
        alert('Data berhasil diubah!');
        window.location = '" . BASE_URL . "admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah!');
        window.location = '" . BASE_URL . "admin.php';
        </script>";
    }

}


?>