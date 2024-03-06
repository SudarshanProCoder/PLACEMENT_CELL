<?php

$servername = "localhost";
$username = "root";
$password = "Date@2004";
$dbname = "placement_portal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
