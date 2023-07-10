<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database = "nourishkids";

    $conn = mysqli_connect($server_name, $username, $password, $database);

    if (!$conn){
        die("Could not connect".mysqli_connect_error());
    }
    echo "Connected successfully";
?>