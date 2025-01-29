<?php

    $x = 25;
    $y = 35;
    $z = "25";
    
    var_dump($x == $z);  // Outputs: boolean true
echo"<br/>";
    var_dump($x === $z); // Outputs: boolean false
echo"<br/>";
    var_dump($x != $y);  // Outputs: boolean true
echo"<br/>";
    var_dump($x !== $z); // Outputs: boolean true
echo"<br/>";
    var_dump($x < $y);   // Outputs: boolean true
echo"<br/>";
    var_dump($x > $y);   // Outputs: boolean false
echo"<br/>";
    var_dump($x <= $y);  // Outputs: boolean true
echo"<br/>";
    var_dump($x >= $y);  // Outputs: boolean false
echo "<br/>This program is written by Vanshika Malhotra 0221BCA137";

?>