<!-- 
    Check if cookies are Enabled
    The following code checks wether cookie are enabled 
 -->
 <?php
    setcookie("user",'test', time()+3600,'/');

 ?>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabled or Disable Cookie</title>
 </head>
 <body>
    <?php
        if(count($_COOKIE) > 0){
            echo "Cookies are Enabled";
        }else{
            echo "Cookies are Disabled";
        }
    ?>
 </body>
 </html>