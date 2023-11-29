<!-- Creating (Declaring ) PHP Variables -->

<!-- Example 1 -->

<?php
 $text ="Hello World";
 $num = 5;
 $dec = 4.5;

//  After the execution of the above statements. 
// $text willhold the value Hello World
// ------
// -----
// NOTE when youassign a text value to avariable, put quotes around the value.

// Output the variable
echo $text."<br>";
echo "Number ".$num."<br>";
echo "Float decimal number ".$dec."<br>";


// Example num1 +num2;

$num1 = 5;
$num2 = 6;

echo $num1 + $num2;

// Variable scope
// In PHP variable can be declared anywhere in the script.
// the scope of a variable is the part of the script where the variable can be referenced/ used.
// PHP Variables Type
// local
// global
// static

// Global
// A variable declared outside a function 
$global_var = 5; //global scope
function myFunction(){
    // using global_var inside this function will generate an error
    
    // echo $global_var;
}
myFunction();
echo $global_var;

// Local 
// A variable declared within a function .
echo "<br>";
function myLocal(){
    $local_var =6; //local scope
    echo $local_var;
}
myLocal();
// using local_var outside the function will generate an error
echo $local_var;

// PHP global keyword
// the global keyword is used to accces a global variable from within the function


$var_one = 45;
$var_two = 5;


function myGlobal(){
    global $var_one, $var_two;
    $var_two = $var_one + $var_two;
}
myGlobal();
echo $var_two;


// PHP also stores all  global variable in an array.
// Ths array is also accessible from within functions can be used to update global variables directly.
echo "<br>";
echo "Global Variable using GLOBAL keywords";
echo "<br>";
echo "<br>";
$array_var_one = 49;
$array_var_two = 10;

function myGlobalFunc(){
    $GLOBALS['array_var_two'] =$GLOBALS['array_var_one'] + $GLOBALS['array_var_two'] ;
}
myGlobalFunc();
echo $array_var_two;


// Static Keyword
//Normally, when the function is completed/executed, all of its variable are deleted. Howeve, sometimes we want a local variable NOT to be deleted. we need for a futher job.
echo "<br>";echo "Static";echo "<br>";
function myStatic(){
    static $static_one =0;
    echo $static_one;echo "<br>";
    $static_one++;
}

myStatic();echo "<br>";
myStatic();echo "<br>";
myStatic();echo "<br>";

// Then each time the function is called, that variables will still have the information it contained from the last time the function was called.
?>