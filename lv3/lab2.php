<?php
$dbname = $_ENV['mysql_db_name'];
$dbuser = $_ENV['mysql_db_user'];
$dbpass = $_ENV['mysql_db_pass'];
$dbhost = $_ENV['mysql_host'];

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($connect, $test_query);

if ($result->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

echo "Connected successfully";
?>
