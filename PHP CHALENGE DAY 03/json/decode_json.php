<?php
$age = '{"Peter":35,"Ben":37,"Joe":43}';
// json_decode() return an object by default
var_dump(json_decode($age));
?>
<br><br>


<?php
$age = '{"Peter":35,"Ben":37,"Joe":43}';
// this will decode Json to PHP Array
var_dump(json_decode($age, true));
?>