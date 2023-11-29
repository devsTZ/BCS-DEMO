<?php
$target_dir ="./upload/";
$target_file =$target_dir . basename($_FILES['file_upload']['name']);
$uploadOK = 1;
$imageFiletype =strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// check if image file is a actual image or fake image
if(isset($_POST['submit'])){
    $check = getimagesize($_FILES['file_upload']['tmp_name']);
    if($check !== false){
        echo "<br>File is an Image --". $check['mime']. ".<br>";
        $uploadOK = 1;
    }else{
        echo "File is not an Image<br>";
        $uploadOK =0;
    }

}
    // check if file already exists.
    if(file_exists($target_file)){
        echo "Sory, file already exist.<br>";
        $uploadOK =0;
    }
    // check file size
    if($_FILES['file_upload']['size'] > 500000){
        echo "Sory, your file is too large.<br>";
        $uploadOK = 0;
    }

    // allow certain file formarts
    if($imageFiletype !="jpg" && $imageFiletype!= "png" && $imageFiletype != "jpeg" && $imageFiletype != "gif"){
        echo "Sorry, only JPG,JPEG,PNG and GIF file are allowed <br>";
        $uploadOK = 0;

    }
    // Check if $uploadOK is set to 0 by an error
    if($uploadOK == 0){
        echo "Sorry, your file was not uploaded<br>";
        // if everthing is ok, then upload the fie
    }else{
        if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $target_file)){
            echo "The file" . basename($_FILES['file_upload']['name']). "Has been uploaded.<br>";

        }else{
            echo "Sorry, Something went wrong<br>";
        }
    }
?>