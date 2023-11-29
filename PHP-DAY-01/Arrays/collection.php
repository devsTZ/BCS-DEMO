<?php
 $colors = array('red', 'blue', 'green', 'yellow');

 foreach($colors as $color){
    echo "Do you like $color Color <br><br>";
 }
//  Chenging element into loop
foreach($colors as $color){
    $color = strtoupper($color);
}
unset($color);
// Ensure that the following writes to $color will not modify the last array element
print_r($colors);
?>