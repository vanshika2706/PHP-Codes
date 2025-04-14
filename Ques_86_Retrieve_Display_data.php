<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Stud_ID, Stud_Name, Stud_Email, Stud_Contact FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Stud_ID"] . "<br>";
        echo "Name: " . $row["Stud_Name"] . "<br>";
        echo "Email: " . $row["Stud_Email"] . "<br>";
        echo "Contact: " . $row["Stud_Contact"] . "<br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();

echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";

?>
