<?php 
require_once './includes/header.php';

?>
<?php
$nameErr = $emailErr=$passwordErr="";
$name=$email=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST['name'])){
        $nameErr=  "Name is Required";
    }else{
        $name = input($_POST['name']);
    }

    if(empty($_POST['email'])){
        $emailErr = "Email is Required";
    }else{
        $email = input($_POST['email']);
        
    }
    if(empty($_POST['password'])){
        $passwordErr = "Password is Required";
    }else{
        $password = input($_POST['password']);
    }
   
}

function input($data){
$data = trim($data);
$data = htmlspecialchars($data);
$data =stripslashes($data);
return $data;
}

?>
    <div class="container">
        <div class="child">
            <form action="" method="post">
                <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name">
                <?php echo "<p style='color:red;'>$nameErr</p>"; ?>
                </div>

                <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email">
                <?php echo "<p style='color:red;'>$emailErr</p>"; ?>
                
                </div>

                <div class="form-group">
                <label for="name">Password</label>
                <input type="password" name="password">
                <?php echo "<p style='color:red;'>$passwordErr</p>"; ?>
                </div>
                <br>
                <div class="form-group">
                    <button name="sub" class="btn-save">Save</button>
                </div>


            </form>
        </div>
    </div>

    Welcome <?php echo $_POST['name']; ?><br>
    Your email address is : <?php echo $_POST['email']; ?><br>
    Your Password is : <?php echo $_POST['password']; ?>
<?php require_once "./includes/footer.php" ?>