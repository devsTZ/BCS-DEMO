<!-- To check the value and type of an expression, using var_dump() function to retrive the type of an exprissio, use the get_debug_type() function.
However to check if an expression is of a certain type use the is_type function instead. -->

<?php
$a_bool = true; //a bool
$a_str = "foo"; //a string
$a_str2 = 'foo'; // a string
$an_int = 12; // an integer
$a_float = 12.02; // a float

echo var_dump($a_bool),"\n"; echo "<br>";
echo var_dump($a_str),"\n"; echo "<br>";
echo var_dump($a_str2),"\n"; echo "<br>";
echo var_dump($an_int),"\n"; echo "<br>";
echo var_dump($a_float),"\n"; echo "<br>";
echo "<br>";
if(is_int($an_int)){
    echo "Interger: $an_int";
    $an_int +4; 
    echo "<br>";
    var_dump($an_int);
} 
echo "<br>";
if(is_string($a_str)){
    echo "String: $a_str";
    echo "<br>";
}
var_dump($a_str);
?>