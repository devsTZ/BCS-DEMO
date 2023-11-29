<?php include './include/header.php'; ?>
<?php 
// initialize session start
session_start();
// check if the user is already logged in
require './database/database.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
header('location: home.php');
}

$email_error = $password_error = $login_error = "";
$email = $password = "";

function input_data($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // validate email
    if(empty($_POST['email'])){
        $email_error = "Please Enter Email.";
    }else{
        $email = input_data($_POST['email']);
    }
    
    // validate password
    if(empty($_POST['password'])){
        $password_error = "Please Enter Password";
    }else{
        $password = input_data($_POST['password']);
    }
    if(empty($email_error) && empty($password_error)){
      
$sql = "SELECT * FROM db_two WHERE email =? ";
if($statement = $conn -> prepare($sql)){
    // bind data
    $statement -> bind_param("s", $param_email);
    // set parameter
    $param_email = $email;
    // execute
    if($statement->execute()){
        // store result
        $statement -> store_result();
        // check if email exist
        if($statement -> num_rows == 1){
            // bind result variable
            $statement->bind_result($id,$first_name,$last_name,$email,$password);
            if($statement -> fetch()){
                if(password_verify($password, password_hash($password, PASSWORD_DEFAULT))){
                    // Password is correct
                    session_start();
                    // store data in session
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email;
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    // redirect user to home page
                    header('location: home.php');
                }else{
                    $login_err = "Invalid username or password.";  
                }
            }
        }else{
            $login_err = "Invalid username or password.";
        }
    }else{
        echo "Oops! Something went wrong. Please try again later.";
        }
    // 
    $statement ->close();
        }
    }
    $conn -> close();
}
?>

<div class="container">
<form action="" method="post">
<h2>Login</h2>
<p class="hint-text">Enter Login Details</p>
<?php echo $login_error; ?>
<div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Email">
    <small id="emailHelp" class="form-text text-danger"><?php echo $email_error; ?></small>

</div>
<div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <small id="emailHelp" class="form-text text-danger"><?php echo $password_error; ?></small>

</div>

<button type="submit" name="save" class="btn btn-primary">Login</button>
<div class="text-center">Don't have an account? <a href="index.php">Register Here</a></div>
</form>
</div>



<?php include './include/footer.php'; ?>