<?php
$servername = "insert";
$username = "insert";
$password = "insert";
$dbName = 'insert';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if (mysqli_connect_errno()) {
    echo "failed connection";
    exit();
}
?>
