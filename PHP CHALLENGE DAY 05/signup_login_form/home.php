<?php
include_once './include/header.php';
 session_start();

//  check if user is logged in, if not then redirect him to the login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login.php");
}
?>
<p>Hello Welcome <?php echo $_SESSION['first_name']; echo ' '; echo $_SESSION['last_name'];?></p>
<p>Your Email Address is <?php echo $_SESSION['email'] ?></p>



<?php include_once './include/footer.php'; ?>