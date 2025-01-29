<?php
$number =12345;
$DigitCounts = 0;
while($number > 0)
{
$number = floor($number/10);
$DigitCounts++;
}
echo"The number of digits is:
$DigitCounts";
echo"<br/> This program is written by Vanshika 0221BC137";
?>
