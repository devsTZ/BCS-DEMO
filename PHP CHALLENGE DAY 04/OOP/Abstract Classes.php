<!-- Abstract Classes and Methods
 are when the present class has a named method, but need its child to fill out the tasks.

-->
<?php
    // parent class

    abstract class Car{
        public $name;
        public function __construct($name)
        {
            $this -> name = $name;
        }
        abstract public function intro() : string;
    }
    // child classes
    class Audi extends Car{
        public function intro(): string
        {
            return "Choose Germany quality! I'm an {$this->name} !";
        }
    }
    class Volvo extends Car{
        public function intro(): string
        {
            return "Proud to be Swedish! I'm a {$this->name}!";

        }

    }


// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi -> intro();
echo "<br>";


$volvo = new Volvo("Volvo");
echo $volvo -> intro();





?>