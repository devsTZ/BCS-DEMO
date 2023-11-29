<?php 
include_once '../../assets/database/database.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true){
  header("location: ../index.php ");
}


$query ="DELETE FROM posts WHERE id='".$_GET["id"]."'";
mysqli_query($conn, $query);
header('location: index.php');
$conn->close();
?>