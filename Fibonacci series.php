<?php
$num = 5 ;
$first = 0;
$second = 1;
echo "Fibonacci series: ";
for($i = 0; $i <$num; $i++)
{
echo $first." ";
$next = $first + $second;
$first = $second;
$second = $next;
}
 echo "<br/>This program is written by Vanshika Malhotra 0221BCA137";	

?>