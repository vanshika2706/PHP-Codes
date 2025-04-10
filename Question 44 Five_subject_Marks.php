<?php
 $Marks = array(
"Subject1" => 90, 
"Subject2" => 70,
 "Subject3" => 40 , 
"Subject4" => 60,
 "Subject5" => 80);
 
 $totalMarks =  array_sum($Marks);

$totalSubjects = count($Marks);
$total_possible_marks = $totalSubjects*100;
 $totalpercentage =  ( $totalMarks/$total_possible_marks)*100;

 echo "Total marks ".  $totalMarks . "</br> ";
 echo "Marks in percentage ". $totalpercentage . "</br> ";
echo "<br>";
echo " This code is Written By Vanshika Malhotra 0221BCA137";
?>

    
