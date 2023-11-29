<!-- The do... while loop
Loops through a block of code once and then repeats the loop as long as the specified condition is true -->
<?php 

$var_test = 1;
do{
    echo "$var_test ROGASIAN MVUNGI <br>";
    $var_test++;
}while($var_test < 10);


?>
<!-- In do.. while loop the condition is tested AFTER executing the statements at least once, even if the condition is false. -->
<?php

$var_test = 12;
do{
    echo "$var_test ROGASIAN MVUNGI <br>";
    $var_test++;
}while($var_test < 10);

?>