<?php
    $servername = "localhost:8889"; 
    // alternativa al localhost in caso non funzionasse '127.0.0.1'
    $username = "root";
    $password = "root";
    $dbname = "db_hotel";

    // Connect
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn && $conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    } else {
        echo "Connected!";
    }
?>