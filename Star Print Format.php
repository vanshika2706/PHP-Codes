<?php
// Number of rows
$rows = 17;

// Outer loop for rows
for ($i = $rows; $i >= 1; $i--) {
    // Inner loop for stars
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    // Move to the next line
    echo "<br/>";
}
echo "<br/>This program is written by Vanshika Malhotra 0221BCA137";	

?>