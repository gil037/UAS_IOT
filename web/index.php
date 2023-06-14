<?php
 
require "db_conn.php";
 
$tampilin = "SELECT * FROM tbl_temp_log";
$tampil2 = "SELECT * FROM tbl_hum_log ";
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>Pengecek Suhu Ruangan</title>
    <!-- TItle Icon -->
    <link
      rel="web icon"
      href="https://cdn.icon-icons.com/icons2/2745/PNG/512/temperature_icon_175973.png"
    />
</head>
<html>
<body>
  <p class="info">Data Temperatur</p>
  <table>
        <tr>
            <th>ID Temperatur</th>
            <th>Waktu</th>
            <th>Topic</th>
            <th>Payload</th>
        </tr>
        <?php
        // Memanggil file koneksi.php;
        // require "..\koneksi.php";
        // Mengambil data dari table;
        $query = $conn->query($tampilin);
        foreach ($query as $data ){
        ?>
        <tr>
            <td><?php echo $data ['id_temp']?></td>
            <td><?php echo $data ['date_time']?></td>
            <td><?php echo $data ['topic']?></td>
            <td><?php echo $data ['payload']?></td>
            <td>
              <!-- <a href="hapus_user.php?id_user=<?php echo $data ['id_temp']?>">
              <i class="fa-solid fa-trash"></i></a> -->
            </td>
        </tr>
        <?php
        }
        ?>  
    </table>
 
 
    <p class="info">Data Humidity</p>
  <table>
        <tr>
            <th>ID Temperatur</th>
            <th>Waktu</th>
            <th>Topic</th>
            <th>Payload</th>
        </tr>
        <?php
        // Memanggil file koneksi.php;
        // require "..\koneksi.php";
        // Mengambil data dari table;
        $query = $conn->query($tampil2);
        foreach ($query as $data ){
        ?>
        <tr>
            <td><?php echo $data ['id_hum']?></td>
            <td><?php echo $data ['date_time']?></td>
            <td><?php echo $data ['topic']?></td>
            <td><?php echo $data ['payload']?></td>
            <td>
              <!-- <a href="hapus_user.php?id_user=<?php echo $data ['id_temp']?>">
              <i class="fa-solid fa-trash"></i></a> -->
            </td>
        </tr>
        <?php
        }
        ?>  
    </table>
    
    
 
</body>
</html>
 
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
 
 
body{
    font-family: 'Poppins', sans-serif;
}
* {
    margin: 0;
    padding: 0;
}
 
 
.info{
    color:black;
    font-size:22px;
    padding-left:67px;
    margin-top:100px;
}
 
table {
  border-collapse: collapse;
  width: 90%;
  margin: auto;
}
 
th, td {
  text-align: left;
  padding: 8px;
  border-bottom:1px solid #cad1db;
 
}
 
th {
  background-color: #242020;
  color: white;
}
 
</style>