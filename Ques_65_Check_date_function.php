<?php
// Define a date
$day = 14;
$month = 4;
$year = 2025;

// Check if the date is valid
if (checkdate($month, $day, $year)) {
    echo "The date $day/$month/$year is valid.<br>";
} else {
    echo "The date $day/$month/$year is not valid.<br>";
}

echo "<br>";
echo " This code is Written By Vanshika Malhotra 0221BCA137";
?>