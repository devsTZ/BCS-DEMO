
<!-- fopen()
A better method to open files is with the fopen() function
this function gives you more option than readfile() function
 -->
<?php
 $myfile = fopen("./test_text.txt", "r") or die("Unable to Open File!");
 
//  echo fgets($myfile);
 echo fread($myfile,filesize("./test_text.txt"));
 fclose($myfile);

?>
