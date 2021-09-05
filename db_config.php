<?php

$db_host = 'localhost';
$db_name = 'company';
$db_username = 'danas';
$db_password='32zk1k.24Hn97mqv';
//data source name
$dsn = "mysql:host=$db_host; dbname=$db_name";

$db_connection = new PDO($dsn, $db_username, $db_password);