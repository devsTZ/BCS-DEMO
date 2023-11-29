<!-- $GLOBALS
is a PHP super global variable which is used to access global variables from anywhere in the PHP scrip -->
<!-- PHP store all global variables in an array called $GLOBALS[index] the index holds the variable name -->

<?php
$x =75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;

?>