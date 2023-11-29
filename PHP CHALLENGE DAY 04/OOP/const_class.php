<!-- 
    constant cannot be change once it is declared
    class constants can be useful if you need to define some constant data within a class

 -->

 <?php
 class Goodbye{
    const LEAVING_MESSAGE ="Thank you for visiting Us.";
    
    public function byebye(){
        echo self:: LEAVING_MESSAGE;
    }
}
 echo Goodbye::LEAVING_MESSAGE;
 echo "<br>";
//  we can access const from inside the class by using the self keyword
// followed by ::
$goodbye = new Goodbye();
$goodbye -> byebye();
 ?>

 