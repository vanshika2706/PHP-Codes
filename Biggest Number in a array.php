<?php
$array = [1,4,6,8,18];
$num = 0;
for($i = 0; $i <= 4; $i++)
{
if($num > $array[$i])
{
$num = $num ;
}
else
{
$num = $array[$i];
}
}
echo $num;
echo "<br>";
echo " This code is Written By Vanshika Malhotra 0221BCA137";

?>