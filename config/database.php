<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'tika');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// connect to the database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check the connection
if(!$conn){
    die('Database connection error: ' . mysqli_connect_error());
}

// echo "Connected successfully"

?>