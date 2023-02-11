<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Use prepared statements to prevent SQL injection attacks
$stmt = mysqli_prepare($con, "SELECT * FROM users WHERE username = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Use the resulting data as needed

// Close the statement when done
mysqli_stmt_close($stmt);

// Close the connection when done
mysqli_close($con);

?>

