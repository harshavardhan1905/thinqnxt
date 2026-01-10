<?php
$host = "ls-b9e1fff8ae66188406492f1b8709a5557d98a493.cvq4mo8ooiu8.ap-south-1.rds.amazonaws.com";
$user = "dbmasteruser";
$password = "Sales1221.";      // XAMPP default
$database = "thinqnxt";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
