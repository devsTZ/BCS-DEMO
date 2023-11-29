<!-- Example 2 -->
<!-- Type casting an doverwriting  -->
<?php
$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($array);
?>
<!-- As all the keys in the above example are cast to 1, the value will be overwritten on every new element and that assigned value "d  is only one left over.
PHP arrays can contain int and string keys at the same time as PHP does not distinguish between indexed and associetive array.-->

<!-- Example 3: -->
<br>
<br>
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>

 
<!-- The key is optional. if it is not specified, PHP will use the increment of the largest previously used int key. -->
<br><br>
<!-- Example 4 -->
<!-- Indexed array without key -->
<?php
$array = array("foo","bar","hello","World");
var_dump($array);
?>

<!-- Example 5: -->
<!-- Key not on all elements -->
<br><br>
<?php
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);
?>
<!-- As you can see the last value 'd' was assigned the key 7. this is because the largest integer key before that was 6.-->