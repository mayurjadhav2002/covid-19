<?php
session_start();
$dbHost = 'localhost';
$dbName = 'mape';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
$conn= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 

error_reporting(0);

?>
