<?php
session_start(); // Start the session

// Set session variable if not already set
if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "Vanshika";
    $message = "Session variable 'Vanshika' is now set.";
} else {
    $message = "Welcome back, " . $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>

<h2>PHP Session Demo</h2>
<p><?php echo $message; ?></p>

echo "<br>";
echo "This code is Written By Vanshika Malhotra 0221BCA137";

</body>
</html>
