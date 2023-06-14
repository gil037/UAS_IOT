<?php
    $serverName = "localhost";
    $dbName = "id20835220_smart_home_data_logs";
    $username = "id20835220_data_logs";
    $password = "*0I0g=8ch0uj";
    
    $conn = mysqli_connect($serverName, $username, $password, $dbName);
    
    if (!$conn) {
      die ("koneksi ke database gagal: ".mysqli_connect_error());
    }
?>