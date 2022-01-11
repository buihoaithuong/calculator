<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ttkh";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

?>