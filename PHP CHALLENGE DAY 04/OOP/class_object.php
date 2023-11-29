<!-- 
    class is a template for object
    object is an instance of class
 -->

 <!-- example 1 -->
 <?php
    class Fruits{
        // properties
        public $name;
        public $color;

        // methods
        function set_name($name){
            $this -> name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this -> color = $color;
        }
        function get_color(){
            return $this->color;
        }
    }

    // define objects
    $apple = new Fruits();
    $banana = new Fruits();

    $apple ->set_name('Apple');
    $apple -> set_color('Red');
    $banana -> set_name('Banana');

    echo $apple -> get_name()."<br>";
    echo $apple -> get_color()."<br>";
    echo $banana -> get_name()."<br>";
   /*PHP instanceof
    you can use the instanceof keyword to check if an object bellongs
    to a specific class
    */
    var_dump($apple instanceof Fruits);
    
 ?>
 <!--
     $this keyword refers to current object, and is only availablr
     inside methods

-->

