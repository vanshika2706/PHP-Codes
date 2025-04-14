<!DOCTYPE html>
<html>
<head>
    <title>Local Time Function Demo</title>
</head>
<body>

<h2>PHP localtime() Function Demo</h2>

<?php
// Set timezone to your local region
date_default_timezone_set("Asia/Kolkata");

// Get local time
$local = localtime(time(), true);

// Display local time components
echo "<p>Hour: " . $local['tm_hour'] . "</p>";
echo "<p>Minute: " . $local['tm_min'] . "</p>";
echo "<p>Second: " . $local['tm_sec'] . "</p>";
echo "<p>Day: " . $local['tm_mday'] . "</p>";
echo "<p>Month: " . ($local['tm_mon'] + 1) . "</p>"; // tm_mon is 0-based
echo "<p>Year: " . ($local['tm_year'] + 1900) . "</p>"; // tm_year is years since 1900

echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";
?>
</body>
</html>
