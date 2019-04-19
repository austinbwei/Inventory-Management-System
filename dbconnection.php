<?php

$servername = "avl.cs.unca.edu";
$username = "ewarren1";
$password = "sql4you";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'ewarren1DBCSCI338');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


?>	