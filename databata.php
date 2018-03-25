<?php
$servername = "localhost";
$username = "id4993088_dw_test";
$password = "123456";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
