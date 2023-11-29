<!-- $_SERVER 
is a PHP super global variable which holds information about, paths and script locations.
 -->

 <?php
 echo $_SERVER['PHP_SELF'];//	Returns the filename of the currently executing script
 echo "<br>";
 echo $_SERVER['SERVER_NAME'];//Returns the name of the host server
 echo "<br>";
 echo $_SERVER['HTTP_HOST'];//Returns the Host header from the current request
 echo "<br>";
 echo $_SERVER['HTTP_REFERER'];//Returns the complete URL of the current page (not reliable because not all user-agents support it)
 echo "<br>";
 echo $_SERVER['HTTP_USER_AGENT'];
 echo "<br>";
 echo $_SERVER['SCRIPT_NAME'];//Returns the path of the current script
 echo "<br>";

 ?>