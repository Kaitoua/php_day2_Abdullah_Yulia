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
/* sql to create table, here as a
structure reference
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/
$sql = "INSERT INTO Users (firstname, lastname, email, address)
VALUES ('John-1', 'Doe-1', 'john@doe.com-1', 'Street 10/5-1')";
if (mysqli_query($conn, $sql)) {
echo "New record created.\n";
} else {
echo "Record creation error for: " . $sql . "\n" . 
mysqli_error($conn);
mysqli_close($conn);
}

?>


</ body>
</html>