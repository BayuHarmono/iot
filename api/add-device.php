<?php
include "../config/database.php";

$sql = "INSERT INTO `devices` (`Serial Number`, `mcu_type`, `location`, `active`, `created_time`) VALUES ('11223344', 'esp32', 'Taman', 'Yes', CURRENT_TIMESTAMP)";

if(mysqli_query($conn, $sql)){
    echo "data berhasil di tambahkan";
} else {
    echo "data gagal di tambah";
}

?>