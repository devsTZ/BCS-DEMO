<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "14-days";

    // connection
    $conn = mysqli_connect($host,$username,$password,$dbname);
    if(!$conn){
        die("Connection Failed");
    }

?>