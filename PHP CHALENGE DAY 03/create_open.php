<?php


$myfile = fopen("newfile.txt", 'w') or die ("Unable to Open file!");
$txt = "Sharon Mvungi\n";
fwrite($myfile , $txt);
$txt = "Mary Sabasi";
fwrite($myfile , $txt);
fclose($myfile);
?>