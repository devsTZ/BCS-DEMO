<?php require_once './header.php'; ?>

<?php
require_once '../../assets/database/database.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true){
  header("location: ../index.php ");
}


// define variable for validation

$name = "";
$nameErr  = "";

// processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validate name
    if(empty($_POST['name'])){
        $nameErr = "Please Enter Name.";
    }else{
        $name = input_data($_POST['name']);
        
    }

    // check input errors befire inserting in database
    if(empty($nameErr)){
        // prepare an insert statement
        $sql = "INSERT INTO categories (name) VALUE(?)";
        
        if($statement = $conn -> prepare($sql)){
            // bind variables to the prepared statement as parameter
            $statement -> bind_param("s", $param_name);
            // set parameters
            $param_name = $name;


            //execute the prepared statement
                if($statement -> execute()){
                    // records created successfully and Redirect to home page
                    header("location: index.php");
                    exit();
                }else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                $conn -> close();
        }
    }
}
function input_data($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

?>

<div class="container">
<form method="POST" action="">

  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input class="form-control" value="<?php echo $name; ?>" name="name" type="text" placeholder="Enter Fullname">
    <small id="emailHelp" class="form-text  text-danger"><?php echo $nameErr; ?></small>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php require_once './footer.php' ?>