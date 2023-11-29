<!-- The real power of PHP comes from it Functions
PHP has more than 1000 built-in function and in addition you can create your own custom functions -->
<!-- PHP Built-in Function 

Are function that can be called directl, from within a script to perform a specific task.
-->
<!-- PHP User Defined Function

A function is a block of statements that can be used repeatedlyin a program.
A function will not execute automatically when a page loads.
A function will be executed by call to the function.

-->


<?php 
 function myMessage(){
    echo "Hello am Your function.<br>";
    echo "You can call me as you want.<br>";
 }
 myMessage(); 
 echo "<br>";
 myMessage();
 echo "<br>";
 myMessage();
 echo "<br>";
?>

<!-- PHP Function Arguments -->
<!-- Information can be passed to functions through arguments. an Argument is just like variable -->


<?php
function myFamily($fname){
    echo "$fname Mvungi";
}
myFamily("Rogasian");
echo "<br>";
myFamily("Emelda");
echo "<br>";
myFamily("Ester");
echo "<br>";
myFamily("Dickson");
echo "<br>";
echo "<br>";
?>

<!-- More arguments -->

<?php
 function family($fname, $year){
    echo "$fname Mvungi. Born in $year <br>";
 }
 family("Rogasian", "2000");
 echo "<br>";
 family("Emelda", "1997");
 echo "<br>";
 family("Ester", "2004");
 echo "<br>";
 family("Rogasian", "1992");
 echo "<br>";

?>

<!-- More about function -->

<?php
 function addNum(int $num1, int $num2){
    return $num1 + $num2;
 }
 echo addNum(4, "5");

?>

<!-- Function Returning values -->

<?php

//  declare(strict_types =1);
//  strict requirement
function mySum(int $x, int $y){
    $ans = $x + $y;
    return $ans;
}
echo "<br>";
echo "5 + 20 =" . mySum(5, 20) ."<br>";
echo "10 + 10 =" . mySum(10, 10) ."<br>";
echo "15 + 20 =" . mySum(15, 20) ."<br>";

?>

<!-- Return type Declaration -->
<!--  -->
<?php
 function addNumber(float $a, float $b) : float{
    return $a + $b;
 }
 echo "<br>";
 echo "<br>";
 echo addNumber(1.7, 5.6);
?>
<!--  -->

<!--  -->
<?php
 function add(float $a, float $b) : int{
    return $a + $b;
 }
 echo "<br>";
 echo "<br>";
 echo add(1.7, 5.6);
?>
