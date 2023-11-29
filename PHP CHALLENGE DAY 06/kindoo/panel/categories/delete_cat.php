<?php

require_once '../../assets/database/database.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true){
  header("location: ../index.php ");
}


$delete = "DELETE FROM cate
gories WHERE id='". $_GET["id"] . "'";

mysqli_query($conn, $delete);
header("location: index.php");
$conn -> close();

?>