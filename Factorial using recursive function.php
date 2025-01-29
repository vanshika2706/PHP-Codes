<?php
function factorial($num)
{
if($num == 0 || $num == 1)
{
return 1;
}
else
{
return $num * factorial($num -1);
}
}
$f = factorial(5);
echo"$f";
 echo"<br/> This program is written by Vanshika 0221BC137";  
?>