<!--  PHP while loop
The while loop ===> loops through a block of code as long as the specified condition is true

-->

<?php
$var_test = 1;

while($var_test < 10){
    echo "$var_test ROGASIAN MVUNGI <br>";
    $var_test++;
}



?>
<?php
$var_test = 1;
$var_sum = 0;
while($var_test <= 10){
    $var_sum =$var_sum + $var_test;
    $var_test++;
    
}echo"The sum of 1 - 10 is ". $var_sum;
?>