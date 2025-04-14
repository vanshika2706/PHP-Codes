<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
   
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    
    $sql = "ALTER TABLE students
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully";
    } else {
        echo "Error altering table: " . $conn->error;
    }
    
    $conn->close();
            echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";
     
?>
