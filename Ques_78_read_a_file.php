<?php

    $file = fopen("sample.txt", "r") or exit("Unable to open file!");
  
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
    echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";

?>