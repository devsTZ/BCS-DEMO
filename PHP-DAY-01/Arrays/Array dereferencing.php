<?php 
function getArray(){
    return array(1,2,3);
}
$secondElement = getArray()[1];
?>
<!-- Note:

Attempting to access an array key which has not been defined is the same as accessing any other undefined variable: an E_WARNING-level error message (E_NOTICE-level prior to PHP 8.0.0) will be issued, and the result will be null. -->