<?php

$db_host = localhost;
$db_name = 'company';
$db_username = 'root';
$db_password='';
//data source name
$dsn = "mysql:host=$db_host; dbname=$db_name";

$db_connection = new PDO($dsn, $db_username, $db_password);

//storing all in $query
$query = "SELECT * FROM user";
//run that $query
$results = $db_connection->query($query);