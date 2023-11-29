<?php 

function myFunc(){
    echo 'Hello from function';
}

function addNumbers($a=5, $b=65){
    $total = $a +$b;
    return $total;
}



echo 'The sum of numbers in function is '. addNumbers() .'<br>' ;
myFunc() ;
echo '<br>'

?>


<!-- returning value -->

<?php 
 function hello(){
    return 'Hello World'; //No output is shown
 }
//  so you have to assign the return value to $txt
 $txt =  hello();
 echo hello() . '<br>';
 echo $txt . '<br>';

?>

<!-- function argument  -->

<?php
function addFunct($num1, $num2){
    $num = $num1 + $num2;
    echo "The sum of two Num is: $num";

}

addFunct(10, 20);



?>

<?php 

//  default argument
function setWeight($minWeight = 50){
    echo "The weight is : " .$minWeight . "<br>";
}
echo "<br>";echo "<br>";
setWeight(100); echo "<br>";
setWeight(300);echo "<br>";
setWeight();
?>