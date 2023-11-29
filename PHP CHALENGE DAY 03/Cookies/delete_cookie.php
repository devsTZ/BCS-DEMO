<!-- To delete cookie use the function setcookie() with an expiration date in the past -->

<?php
// seetthe expiration date to one hour ago
setcookie('user' ,'', time() - 3600);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookies</title>
</head>
<body>
    <?php 
    echo "Cookie 'user' is deleted.";
    ?>
</body>
</html>