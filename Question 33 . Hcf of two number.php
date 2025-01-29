<?php
// Input two numbers
$num1 = 56; // Change this value for testing
$num2 = 98; // Change this value for testing

// Find HCF using the Euclidean algorithm
while ($num2 != 0) {
    $remainder = $num1 % $num2;
    $num1 = $num2;
    $num2 = $remainder;
}

// Output the result
echo "The HCF of the given numbers is: " . $num1;
 echo "<br/>This program is written by RVanshika Malhotra 0221BCA137";	

?>
