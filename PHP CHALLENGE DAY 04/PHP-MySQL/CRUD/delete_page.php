<?php

require_once './database/config.php';
$delete = "DELETE FROM db_one WHERE id='". $_GET["id"] . "'";

mysqli_query($conn, $delete);
header("location: index.php");
$conn -> close();

?>