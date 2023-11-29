<?php require_once './include/header.php'; ?>

<?php
require_once './database/config.php';
// define variable for validation

$name = $address = $salary = "";
$nameErr = $addressErr = $salaryErr = "";

// processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validate name
    if(empty($_POST['name'])){
        $nameErr = "Please Enter Name.";
    }else{
        $name = input_data($_POST['name']);
        
    }

    // validate address
    if(empty($_POST['address'])){
        $addressErr = "Please Enter an Address.";
    }else{
        $address = input_data($_POST['address']);
    }

    // validate salary
    if(empty($_POST['salary'])){
        $salaryErr =" Please enter the Salary Amount.";
    }elseif(!ctype_digit($_POST['salary'])){
        $salaryErr =" Please Enter A positive Integer Value";
    }else{
        $salary = input_data($_POST['salary']);
    }

    // check input errors befire inserting in database
    if(empty($nameErr) && empty($addressErr) && empty($salaryErr)){
        // prepare an insert statement
        $sql = "INSERT INTO db_one (name,address,salary) VALUE(?,?,?)";
        
        if($statement = $conn -> prepare($sql)){
            // bind variables to the prepared statement as parameter
            $statement -> bind_param("sss", $param_name, $param_address, $param_salary);
            // set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;


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
  
  <div class="form-group">
    <label for="exampleInputEmail1">Address:</label>
    <input class="form-control" value="<?php echo $address; ?>" name="address" type="text" placeholder="Enter Home Address">
    <small id="emailHelp" class="form-text  text-danger"><?php echo $addressErr; ?></small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Salary:</label>
    <input class="form-control" value="<?php echo $salary; ?>" name="salary" type="text" placeholder="Enter Your Salary">
    <small id="emailHelp" class="form-text  text-danger"><?php echo $salaryErr; ?></small>
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php require_once './include/footer.php' ?>