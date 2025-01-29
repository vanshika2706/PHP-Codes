<?php

    /* Defining a function that multiply a number
    by itself and return the new value */
    function selfMultiply(&$number)
    {
        $number *= $number;
        return $number;
    }
     
    $mynum = 5;
    echo $mynum . "<br/>"; // Outputs: 5
     
    selfMultiply($mynum);
    echo $mynum; // Outputs: 25
    echo"<br/> This program is written by Vanshika 0221BCA137";    
?>