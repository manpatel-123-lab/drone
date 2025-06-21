<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'users');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if (isset($_POST['sb'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];  // Fixed: Added missing underscore
    $password = $_POST['pass'];
    
    $query = "INSERT INTO mydata (name, email, password) VALUES ('$name', '$email', '$password')";
    $execute = mysqli_query($con, $query);  // Fixed: Removed trailing hyphen
    
    if ($execute) {
        echo "<script>alert('Data saved successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jay Gogabapa</title>
</head>
<body>
<h1>Welcome to my classes</h1>
<form method="POST">
    Name: <input type="text" name="name">
    Email: <input type="text" name="mail">
    Password: <input type="password" name="pass">
    <input type="submit" name="sb" value="Submit">
</form>
</body>
</html>