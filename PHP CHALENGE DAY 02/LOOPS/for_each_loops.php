<!-- foreach loop
Loops through a block of code for each element in an array. -->

<?php
 $colors = array('red', 'green', 'blue', 'yellow');

 foreach($colors as $value){
    echo "$value <br>";
 }
echo "<br>";
 $age = array(
    "Peter" => "35",
    "Ben" => "20",
    "Kindo" => "23"
 );
 foreach($age as $x => $val){
    echo "$x = $val <br>";
 }

?>
