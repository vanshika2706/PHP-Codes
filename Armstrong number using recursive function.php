<?php

function Armstrong($number) {
    $num = $number;
    $sum = 0;
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
}

$number = 153;  
Armstrong($number);  
echo"<br/> This program is written by Vanshika 0221BC137";
?>
