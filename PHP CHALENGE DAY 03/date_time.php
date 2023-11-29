<!-- the PHP date() function is used to format a date and /or a time. -->
<?php
 echo "Today is ". date("d/m/Y") ."<br>";
 echo "Today is " . date("d.m.Y")."<br>";
 echo "Today is " . date("d-m-Y")."<br>";
 echo " " . date("H a")."<br>";
 echo " " . date("H i s a")."<br>";
 echo " " . date("h")."<br>";
 echo " " . date("i")."<br>";
 echo " " . date("s")."<br>";
 echo " " . date("a")."<br>";
// use date() function to automatically upddate the copyright year on your website
echo "Wekindos Devs &copy; 2015-". date('Y');
?>