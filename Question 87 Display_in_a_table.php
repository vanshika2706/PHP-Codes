<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT Stud_ID, Stud_Name, Stud_Email, Stud_Contact
    FROM students";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th>
        <th>Email</th><th>Contact</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Stud_ID"].
    "</td><td>" . $row["Stud_Name"].
    "</td><td>" . $row["Stud_Email"].
    "</td><td>" . $row["Stud_Contact"]."</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
        echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";

?>
