<!DOCTYPE html>
<html>
<head>
    <title>Open File Example</title>
</head>
<body>

<h2>Opening a File in PHP</h2>

<?php
$filename = "sample.txt"; // Make sure this file exists in the same directory

// Open the file in read mode
$file = fopen($filename, "r");

if ($file) {
    echo "<p>File '$filename' opened successfully!</p>";
    fclose($file); // Close the file after opening
} else {
    echo "<p>Unable to open the file!</p>";
}

echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";
?>

</body>
</html>
