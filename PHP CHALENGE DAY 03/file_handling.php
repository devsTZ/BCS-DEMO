<!-- 
    PHP File Handling
    File Handling is an important part of any web applicattion. You often need to open and process a file for different tasks.
 -->

 <!-- readfile() function reads a file and writes it to the output buffer. -->


<?php
echo readfile("./test_text.txt");
?>
<!-- The readfile() function is useful if all you want to do is open up a file and read its content -->