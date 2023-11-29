
<?php

$array = array(
    "foo" => "bar",
    43 => 23,
    "multi" => array(
        "Dimensional" => array(
            "array"=> "foo"
        )
    )
        );
        // var_dump($array["foo"]); 
        // var_dump($array[43]);
        var_dump($array["multi"]["Dimensional"]["array"]);
?>