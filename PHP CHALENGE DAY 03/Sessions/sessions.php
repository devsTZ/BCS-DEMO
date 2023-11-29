
<!--  PHP Sessions
when you work with application, you open it, do some changes and then you close it. This much like sessions.
The computer knows who you are.
It knows when you start the application and when you end.
But on the internet there isone problem:
the web server does not know who you are or what you do because the HTTP address doesn't maintain state.

 -->

<?php
//  start sessions 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Sessions</title>
</head>
<body>
    <?php
        // set sessionvariables
        $_SESSION['favcolor'] = 'green';
        $_SESSION['favanimal'] = 'cat';
        // echo "Session variable are set";
        // get session variable 
        echo "Favorite color is " . $_SESSION['favcolor']. "<br>";
        echo "Favorite animal is " .  $_SESSION['favanimal'] . "<br>";
        // or print all session
        print_r($_SESSION);
        echo "<br>";
        // change a session variable 
        $_SESSION['favcolor'] = 'yellow';
        print_r($_SESSION);
        // remove all session variable
        session_unset();
        // destroy the sessions
        session_destroy();
    ?>
    
</body>
</html>