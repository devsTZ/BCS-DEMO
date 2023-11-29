<!-- Php associative object -->
<?php
$json = '{"Peter":35,"Ben":37,"Joe":43}';
$json_obj = json_decode($json);

echo $json_obj->Peter;
echo "<br>";
echo $json_obj->Ben;
echo "<br>";
echo $json_obj->Joe;

?>

<!-- Php Asssociative array -->
<?php

$json_array = '{"Peter":30,"Ben":47,"Joe":38}';

$json_arr = json_decode($json_array, true);
echo "<br>";
echo "<br>";
echo $json_arr['Peter'];
echo "<br>";

echo $json_arr['Ben'];
echo "<br>";

echo $json_arr['Joe'];
echo "<br>";

?>