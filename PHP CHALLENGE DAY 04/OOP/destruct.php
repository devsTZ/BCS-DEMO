<?php
// destructir is called when the object is destructed or the script is stopped or exited.
class Tunda{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this -> name = $name;
        $this -> color = $color;
    }
    function __destruct()
    {
        echo "The fruit is {$this -> name} and the color is {$this -> color} <br>";
    }
    
}
$apple = new Tunda('Apple' ,'Red');
$banana = new Tunda('Banana' ,'Yellow');

?>