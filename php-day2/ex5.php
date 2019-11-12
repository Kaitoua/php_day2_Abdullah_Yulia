<!DOCTYPE html>
<html>
<head>
       <title>PHP database-Add tables</title>
</head>
<body >

<?php
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "database_php_day2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error() . "\n");
} 

// sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
address VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)" ;

if (mysqli_query($conn, $sql)) {
echo "Table Users created successfully" . "\n";
} else {
echo "Error creating table: " . mysqli_error($conn) . "\n";
} mysqli_close($conn);
?>

</ body>
</html>