<?php
$servername = "Mysql_db";
$username = "root";
$password = "root";
$dbname = "mysql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  echo "error";
}
else{
	echo "Connected successfully";
}



?>