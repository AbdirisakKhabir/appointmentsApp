<?php

$host_name = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($host_name, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>