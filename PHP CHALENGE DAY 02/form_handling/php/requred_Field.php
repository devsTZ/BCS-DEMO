<?php
// define variable and set to empty value
$nameErr=$emailErr="";
$name =$email="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['name'])){
        $nameErr = "Name is Required Field.";
    }else{
        $name = test_input($_POST['name']);
    }
if(empty($_POST['email'])){
    $emailErr ="Email is Required Field.";
}else{
    $email = test_input($_POST['email']);
}


}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requred Field</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <br>  <input type="text" name="name">
        <?php echo "<p style='color:red;'> $nameErr</p>"; ?>

        E-mail: <br> <input type="email" name="email">

        <?php echo "<p style='color:red;'>$emailErr </p>"; ?>
        
        
        <input type="submit" name="submit" value="submit">

    </form>
   
    <?php
        if(empty($_POST['name'] && $_POST['email'])){
            ?>
           <p>Data not found</p>
            <?php
        }else{

            ?>
             <p>Welcome <?php echo $_POST['name'] ?></p>
            <p>Your Email Address is <?php echo $_POST['email'] ?></p>
            <?php
        }
    ?>

    
</body>
</html>