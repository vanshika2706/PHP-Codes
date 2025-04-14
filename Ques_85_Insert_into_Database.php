<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "INSERT INTO students (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
VALUES (101, 'Akshay', 'akshay@gmail.com', '1234567890');";

$sql2 = "INSERT INTO students (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
VALUES (102, 'Vanshika', 'vanshika@gmail.com', '9876543210');";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "Both records inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";

$conn->close();

?>
