<?php

$number = 153; 

$num = $number; $sum = 0;
$numOfDigits = strlen((string)$num); 

while ($num > 0) {
    $digit = $num % 10;
    $sum += pow($digit, $numOfDigits);
    $num = (int)($num / 10);
}


if ($sum == $number) {
    echo $number . " is an Armstrong number.";
} else {
    echo $number . " is not an Armstrong number.";
}
 echo "<br/>This program is written by Vanshika Malhotra 0221BCA137";	

?>
