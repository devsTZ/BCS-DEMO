<?php

require_once './header.php';

require_once '../../assets/database/database.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true){
  header("location: ../index.php ");
}


$name = "";
$nameErr = "";



function input_data($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
// processing form data when form is submitted

if(isset($_POST['submit'])){
     // Get hidden input value
     $id = $_POST["id"];
     $name = $_POST['name'];


    // validate name
    if(empty($_POST['name'])){
        $nameErr = "Please Enter Name.";
    }else{
        $name = input_data($_POST['name']);
        
    }

    // check input errors befire inserting in database
    if(empty($nameErr)){
        // prepare an insert statement
       $sql = "UPDATE categories SET name = ? WHERE id = ?";
       if($statement = $conn -> prepare($sql)){
        // bind variables to the prepared statement as parameters
        $statement -> bind_param("si", $param_name, $param_id);

        // set parameters
        $param_name = $name;
        $param_id = $id;

        // execute the statement
        if($statement -> execute()){
            // records updated successfull . Then redirect to home page
            header("location: index.php");
            exit();
        }else{
            echo "Oops! Something went wrong. Please try again later.";
        }
       }
    //    close statement
    $statement -> close();
    }
    // close connection
    $conn -> close();
}else{
    // check existence od id parameter before processing further
    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        // Get URL Parameters
        $id = trim($_GET['id']);

        // prepare statement as parameters
        $sql = "SELECT * FROM categories WHERE id = ?";
        if($statement = $conn -> prepare($sql)){
            // bind parameters
            $statement -> bind_param('i', $param_id);

            // set parameters
            $param_id = $id;
            // execute the prepared statement
            if($statement -> execute()){
                $result = $statement -> get_result();

                if($result -> num_rows == 1){
                    // Fetch result row as an associative array
                    $row = $result -> fetch_array(MYSQLI_ASSOC);
                
                    // retrive individual data
                    $name = $row['name'];
                }else{
                    // Erro page
                    header("Location: error_page.php");
                    exit();
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
        }
    }
   
}
 // close statement
//  $statement ->close();
    
// close connection
$conn -> close();
}

?>

<div class="container">
<form method="POST" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input class="form-control" value="<?php  echo $name; ?>" name="name" type="text" >
    <small id="emailHelp" class="form-text  text-danger"><?php echo $nameErr; ?></small>
  </div>
  

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php require_once './footer.php'; ?>