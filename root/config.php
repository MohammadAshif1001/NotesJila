<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "njila";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}

$hostname = "http://localhost/notesjila";
?>