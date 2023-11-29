<!-- JSON stands for Javascript Object Notation, and is a syntaxt for storing and exchanging data. -->

<!-- json_encode() -->
<?php  

$age = array("Peter" => 35, "Ben" => 45, "Jery" => 49); 
echo json_encode($age);
?>
<br><br>
<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>