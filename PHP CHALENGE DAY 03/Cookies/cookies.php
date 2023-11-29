<!-- PHP COOKIES
A cokie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. 
-->

<!-- create Cookies -->
<?php
 $cookie_name ="User";
 $cookie_value ="John Doe";
 setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
//  86400 = 1day

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies </title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$cookie_name])){
            echo "Cookie name '". $cookie_name ."'is not set";

         }else{
            echo "Cookie '". $cookie_name . "'is set <br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
         }
    ?>
</body>
</html>