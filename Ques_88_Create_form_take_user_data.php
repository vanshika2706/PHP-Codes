<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = trim($_POST['name']);
    $class = trim($_POST['class']);
    $semester = trim($_POST['semester']);
    $gender = trim($_POST['gender']);
    $mobile = trim($_POST['mobile']);

    // Prepare and execute insert query
    $stmt = $conn->prepare("INSERT INTO students (name, class, semester, gender, mobile) VALUES (?, ?, ?, ?, ?)");

    if ($stmt === false) {
        $errorMessage = "Prepare failed: " . $conn->error;
    } else {
        $stmt->bind_param("sssss", $name, $class, $semester, $gender, $mobile);
        if ($stmt->execute()) {
            $successMessage = "Registration successful!";
            echo "<script>alert('Registration successful!');</script>";
        } else {
            $errorMessage = "Execute failed: " . $stmt->error;
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <?php if (!empty($successMessage)) : ?>
        <p style="color:green;"><?php echo $successMessage; ?></p>
    <?php elseif (!empty($errorMessage)) : ?>
        <p style="color:red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="">--Select Class--</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="BBA">BBA</option>
            <option value="MBA">MBA</option>
            <option value="LLB">LLB</option>
            <option value="BTECH">BTECH</option>
            <option value="BBA-LLB">BBA-LLB</option>
        </select><br><br>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" placeholder="e.g. 5th" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>

        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" title="Enter a 10-digit number" required><br><br>

        <input type="submit" value="Register">
    </form>

    <br><br>
    <?php echo "<strong>This code is Written By Vanshika Malhotra 0221BCA137</strong>"; ?>

</body>
</html>
