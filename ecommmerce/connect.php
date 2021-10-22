<?php
$servername = "localhost";
$username = "root";
$password = "";
$option=array(
PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
);

try {
  $con = new PDO("mysql:host=$servername;dbname=shop", $username, $password);
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 