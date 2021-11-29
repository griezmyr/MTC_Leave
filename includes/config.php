<?php

// Development Connection
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','leave_staff');

// Remote Database Connection
define('DB_HOST','remotemysql.com');
define('DB_USER','vcgAw1zUt3');
define('DB_PASS','geLjjbOCLi');
define('DB_NAME','vcgAw1zUt3');

$conn = mysqli_connect('remotemysql.com','vcgAw1zUt3','geLjjbOCLi','vcgAw1zUt3') or die(mysqli_error());

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>