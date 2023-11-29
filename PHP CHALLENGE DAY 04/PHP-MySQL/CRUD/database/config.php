<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="14-days";

// connect to database
$conn = new mysqli($servername,$username,$password,$dbname);

// check connection
if(!$conn){
    die("Connection Failed"). mysqli_connect_error();
}
?>