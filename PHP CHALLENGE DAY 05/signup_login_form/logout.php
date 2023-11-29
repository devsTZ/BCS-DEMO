<?php
 session_start();
//  unset session
$_SESSION = array();
// destroy session
session_destroy();
// redirect to login page
header('location: login.php');
?>