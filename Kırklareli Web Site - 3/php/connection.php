<?php
$host = "localhost";
$username="root";
$password="";
$database = "logo_blog";

$conn =mysqli_connect($host,$username,$password,$database);
$conn -> set_charset("utf8");
if(!$conn){
    die("Database connection error.".mysqli_connect_error());
}

?>