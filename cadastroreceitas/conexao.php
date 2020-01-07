<?php

function getConnection() {
    $servername = "localhost";
    $database = "bananasql";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conn, "utf-8");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}



?>