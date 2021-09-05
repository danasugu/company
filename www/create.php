<?php
require_once('../db_config.php');
$query = "SELECT * FROM teachers";
//run that $query
$results = $db_connection->query($query);
//close db connection
$db_connection = NULL;

foreach($results as $result){
  echo $result['email'];
  echo "<br>";
}