<?php 
 class matunda{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
    $this -> name = $name;
    $this -> color =$color;        
    }
    public function intro(){
        echo "The fruit is {$this -> name} and the color is {$this -> color}.";

    }
 }
 
//  mango inherited from  matunda
class mango extends matunda{
    public function message(){
        echo "Am I a fruit or Juice?<br>";
    }
}

$embe = new mango("Mango", "Yellow or Green");
$embe -> message();
$embe -> intro();

class Orange extends matunda{
    public function tundaFruit(){
        echo "<br>";
        echo  2 + 4 ." Fruits Orange or Mango<br>";
    }
}


$orange = new Orange('Orange', 'Yellow or green');
$orange -> tundaFruit();
$orange -> intro();

?>