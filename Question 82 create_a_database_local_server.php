<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    
    $conn = new mysqli($servername, $username, $password);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
   
    $sql = "CREATE DATABASE mydb";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    $conn->close();
    echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";

?>
