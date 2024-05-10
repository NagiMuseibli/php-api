<?php


$host = "localhost";
$userName = "root";
$password = "";
$dbName = "phpapi";

$conn = mysqli_connect($host,$userName,$password,$dbName);
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}