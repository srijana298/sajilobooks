<?php 
require_once "config.php";

$connection = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DATABASE);

if (!$connection) {
  die("Connection Error");
}

?>

