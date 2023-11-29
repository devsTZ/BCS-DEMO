<?php
// A constructor allows you to initialize an object'sproperties
// upon creation of the object.

class Fruit{
    // properties
    public $name;
    public $color;

    // methods
    function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }
    function get_name(){
        return $this -> name;
    }
    function get_color(){
        return $this -> color;
    }
}

// objects
$apple = new Fruit('Apple', 'red');
echo " Fruit name ".$apple -> get_name()." Color ";
echo $apple -> get_color();
?>