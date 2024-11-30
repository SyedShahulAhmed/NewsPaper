<?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsbase";
$con = new mysqli($servername, $username, $password,$dbname);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
