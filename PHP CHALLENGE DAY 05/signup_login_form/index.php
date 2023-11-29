<?php include_once './include/header.php'; ?>
<?php
require './database/database.php';


// define variable 
$first_name = $last_name = $email = $password = "";
$first_name_error = $last_name_error = $email_error = $password_error = "";

// 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validate first name
    if(empty($_POST['first_name'])){
        $first_name_error = "Please enter first name";
    }else{
        $first_name = input_data($_POST['first_name']);
    }

    //  validate last name
    if(empty($_POST['last_name'])){
        $last_name_error = "Please enter last name";
    }else{
        $last_name = input_data($_POST['last_name']);
    }
    // validate email 

    if(empty($_POST['email'])){
        $email_error = "Please enter email address";
    }elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Please enter valid email";
    }else{
        $email = input_data($_POST['email']);
    }
    // validate password
    if(empty($_POST['password'])){
        $password_error = "Please enter password";
    }elseif(strlen($_POST['password']) < 6){
        $password_error =  "Password must contain atleast 6 characters"; 
    }else{
        $password = input_data($_POST['password']);
    }
  
    // check for error
    if(empty($first_name_error) && empty($last_name_error) && empty($email_error) && empty($password_error)){
        
        
        // prepare an insert statement
        $sql = "INSERT INTO db_two (first_name, last_name, email, password) VALUE (?,?,?,?)";
        if($statement = $conn ->prepare($sql)){
            // bind parameters

            $statement -> bind_param("ssss",$param_f_name, $param_l_name, $param_email, $param_pass,);
            // set parameters
            $param_f_name = $first_name;
            $param_l_name = $last_name;
            $param_email = $email;
            $param_pass = password_hash($password, PASSWORD_DEFAULT);
            
            // execute the statement
            if($statement -> execute()){
                // redirect to ...
                header('location: login.php');
                exit();
            }
            // 
            $statement  -> close();
        }
// 
$conn -> close(); 
        }
        
   
}

function input_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

    <div class="container">
        <div class="wrapper">
            <br>
            <p class="">Registration Form</p>
            <small class="text-muted">Create your account </small>
            <br>
            <br>
        </div>
    <form action="" method="POST" >
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input  type="text" value="<?php if(!empty($_POST['first_name'])){ echo $_POST['first_name']; }?>"  name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name.">
            <small id="emailHelp" class="form-text text-danger"><?php echo $first_name_error; ?></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input  type="text" value="<?php if(!empty($_POST['last_name'])) {echo $_POST['last_name']; }?>" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
            <small id="emailHelp" class="form-text text-danger"><?php  echo $last_name_error; ?></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input  type="text" value ="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address">
            <small id="emailHelp" class="form-text text-danger"><?php echo $email_error; ?></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input  type="password" value="<?php if(!empty($_POST['password'])){  echo $_POST['password'];} ?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            <small id="emailHelp" class="form-text text-danger"><?php echo $password_error; ?></small>
        </div>
       
        <button type="submit" name="save" class="btn btn-primary">Register</button>
  <br>
    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
    </div>

<?php include_once './include/footer.php'; ?>

