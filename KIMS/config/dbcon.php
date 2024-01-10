<?php 

    // Server settings
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "swiftdb";

    // Create connection
    $con = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }   
        echo "Connected successfully";

?>