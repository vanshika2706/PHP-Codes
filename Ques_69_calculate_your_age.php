<html>
<body>

<form method="post">
    <label for="dob">Enter your Date of Birth (YYYY-MM-DD): </label>
    <input type="text" id="dob" name="dob" placeholder="YYYY-MM-DD">
    <input type="submit" name="calculate" value="Calculate Age">
</form>

<?php
if (isset($_POST['calculate'])) {
    $dob = $_POST['dob'];
    
  
    if (!empty($dob)) {
        $today = date("Y-m-d");
        
               $diff = date_diff(date_create($dob), date_create($today));
        
    
        echo "<p>Your Age: " . $diff->y . " years, " 
            . $diff->m . " months, and " 
            . $diff->d . " days.</p>";
    } else {
        echo "<p>Please enter a valid date of birth.</p>";
    }
}
?>

</body>
</html>
