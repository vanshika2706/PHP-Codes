<html>
<body>
<?php
$Marks = array(
    "Computer" => 90, 
    "English" => 70,
    "Maths" => 40, 
    "Science" => 60,
    "SST" => 80
);

echo "<br>";
echo " This code is Written By Vanshika Malhotra 0221BCA137";
?>

<table border="1">
<tr>
<th>SR.</th>
<th>Subject Name</th>
<th>Marks</th>
</tr>

<?php
$serialNo = 1;
foreach($Marks as $subject => $mark) {
    echo "<tr>
            <td>" . $serialNo++ . "</td>
            <td>" . $subject . "</td>
            <td>" . $mark . "</td>
          </tr>";
}

$totalMarks = array_sum($Marks);
$totalSubjects = count($Marks);
$total_possible_marks = $totalSubjects * 100;
$totalpercentage = ($totalMarks / $total_possible_marks) * 100;

echo "<tr><td colspan='3'></td></tr>";  // Add a blank row
echo "<tr><td colspan='2'>Total Marks</td><td>" . $totalMarks . "</td></tr>";
echo "<tr><td colspan='2'>Marks in Percentage</td><td>" . $totalpercentage . "%</td></tr>";
?>

</table>


</body>
</html>
