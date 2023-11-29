
<!-- footer area -->
<?php
// define variable 
 $email = "";
 $email_error = "";

// 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    // validate email 

    if(empty($_POST['email'])){
        $email_error = "Please enter email address";
    }elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Please enter valid email";
    }else{
        $email = input_data($_POST['email']);
    }
    
  
    // check for error
    if(empty($email_error)){
        
        
        // prepare an insert statement
        $sql = "INSERT INTO users (email) VALUE (?)";
        if($statement = $conn ->prepare($sql)){
            // bind parameters

            $statement -> bind_param("s", $param_email,);
            // set parameters
           
            $param_email = $email;
           
            // execute the statement
            if($statement -> execute()){
                // redirect to ...
                Echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thanks</strong> Your among us now
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
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

<div class="container bg-light mt-2 pt-5 ">
<form action="" method="post" class="row g-6 justify-content-md-center">
    <div class="col-auto">
  <p>Join our newslatter for the latest updates.</p>

    </div>
  <div class="col-auto">
  
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input name="email" class="form-control" type="email" placeholder="Enter Email Address" aria-label="default input example">
  </div>
  <div class="col-auto">
    <button type="submit" name="submit" class="btn btn-primary mb-3">Join Now</button>
  </div>
</form>



</div>
  <div class="container ">
    <div class="row g-6 justify-content-md-center">
    <p class="text-muted">&copy; 2021 - <?php echo date('Y')?> wekindos devs </p>
</div>
  </div>


<!-- End Container -->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>