<!-- $_POST

is a PHP super global variable which is used to collect form data after submitting an HTML form with method  $_POST-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST global variable</title>
</head>
<body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
            Name: <input type="text" name="fname">
            <input type="submit" value="submit">

        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // collect data
                $name = $_POST['fname'];
                if(empty($name)){
                    echo "Name is Empty";
                }else{
                    echo $name;
                }
            }
        ?>
</body>
</html>