<?php
    require "../db_conn.php";
 
    $webhook = json_decode(file_get_contents('php://input'), true);
    $topic = $webhook['topic'];
    $payload = $webhook['payload'];
    
    $sql = "INSERT INTO tbl_hum_log (topic, payload) VALUES ('$topic', '$payload')";
    
    mysqli_query($conn, $sql);
?>