<!-- PHP constant
is an identifier name for a simple value.
the value cannot be changed during the script.

-->

<?php
define("GREETING", "Welcome to the PHP 14-DAYS Challenge.");
echo GREETING;
?>

<!-- PHP constant Arrays -->

<?php
echo "<br>";echo "<br>";
 define("cars",[
    "Alfa Romeo",
    "Subaru",
    "Toyota",
    "BMW Series 6",
    "Ford"
 ]);
 echo cars[0];
?>

<!-- Constant are global 
constant are automatically global and can be used across the entire script-->
<?php

define("greetings", "Welcome to 14-Days Php Challenge.");
function myGreating(){
    echo greetings;
}
echo "<br>";echo "<br>";
myGreating();
echo "<br>";echo "<br>";
myGreating();
?>