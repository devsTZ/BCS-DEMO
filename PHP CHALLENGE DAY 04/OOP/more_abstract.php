<?php
  abstract class ParentClass {
    // abstarct method with an argument
   abstract protected function prefixName($name);
  }
  class ChildClass extends ParentClass{
    public function prefixName($name){
        if($name == "John Doe"){
            $prefix =  "Mr.";
        }elseif($name == "Jane Doe"){
            $prefix = "Mrs.";
        }else{
            $prefix ="";
        }
        return "{$prefix} {$name}";
    }
  }

  $names = new ChildClass;
  echo $names -> prefixName("John Doe");
  echo "<br>";
  echo $names -> prefixName("Jane Doe");
  echo "<br>";
  echo $names -> prefixName("Rogasian Mvungi");
?>