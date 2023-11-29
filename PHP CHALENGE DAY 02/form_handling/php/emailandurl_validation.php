
<?php
// define variable and set to empty value
$nameErr = $emailErr = $webErr = "";
$name = $email = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['name'])){
        $nameErr = "Name is Required Field.";
    }else{
        $name = test_input($_POST['name']);
        // check if name only contain letters an whitespaces
        if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $nameErr ="Only letters and white space allowed.";
        }
    }
if(empty($_POST['email'])){
    $emailErr ="Email is Required Field.";
}else{
    $email = test_input($_POST['email']);
    // check if email address is well-formed
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr ="Invalid email format";
    }
}
if(empty($_POST['website'])){
    $webErr ="URL is Required Field.";
}else{
    $website = test_input($_POST['website']);
    // check if URL address syntax is valid
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $webErr ="Invalid Url";
    }
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
    <title>Email and URL Validation</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    Name: <br>  <input type="text" name="name">
        <?php echo "<p style='color:red;'> $nameErr</p>"; ?>

        E-mail: <br> <input type="email" name="email">

        <?php echo "<p style='color:red;'>$emailErr </p>"; ?>
        Website: <br> <input type="text" name="website">

        <?php echo "<p style='color:red;'>$webErr </p>"; ?>
        
        
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>