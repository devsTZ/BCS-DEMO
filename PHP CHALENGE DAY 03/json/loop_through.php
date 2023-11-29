
<?php

$json =  '{"Peter":35,"Ben":37,"Joe":43}';

$json_obj = json_decode($json);
foreach($json_obj as $key => $value){
    echo "Name  " . $key . " ==>  "."  Age  " . $value . "<br>";
}

?>

<?php
 $json =  '{"Peter":35,"Ben":37,"Joe":43}';
 $json_arr = json_decode($json, true); 

 foreach($json_obj as $key => $value){
    echo "Name  " . $key . " ==>  "."  Age  " . $value . "<br>";
}
?>