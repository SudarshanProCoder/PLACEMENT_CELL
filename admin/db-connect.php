<?php
$host     = 'localhost';
$username = 'root';
$password = 'Date@2004';
$dbname   ='placement_portal';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}