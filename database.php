<?php

$host = "127.0.0.1";
$db_name = "tasks-database";
$username = "root";
$password = "";
  
// connect to database
$connection = new mysqli($host, $username, $password, $db_name);
  

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

echo "Connection successful";

?>
