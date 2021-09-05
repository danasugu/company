<?php
require_once('../db_config.php');
$query = "SELECT * FROM teachers";
//run that $query
$results = $db_connection->query($query);
//close db connection
$db_connection = NULL;

try{
  $db_connection = new PDO ($dns, $db_username, $db_password);
}catch (Exception $e) {
  echo 'there was a failure';
}