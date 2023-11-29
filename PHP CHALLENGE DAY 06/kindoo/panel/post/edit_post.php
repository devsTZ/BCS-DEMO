
<?php
include_once './include/header.php';
include_once '../../assets/database/database.php';
session_start(); 
if(!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true){
  header("location: ../index.php ");
}


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $cat_id = $_POST['cat_id'];
    $status = $_POST['status'];
    $created_at = date('H:i:s');
    $image = $_FILES['image']['name'];
    $target = './uploads/images/'. basename($_FILES['image']['name']);

    $sql = "UPDATE posts SET title='$title', body='$body', cat_id='$cat_id', status='$status', created_at='$created_at', image='$image' WHERE id='$id' ";
   
    $result = $conn->query($sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header('location: index.php');
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM posts WHERE id='$id'";
    $result =$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
          
           $title = $row['title'];
           $body = $row['body'];
           $status = $row['status'];
           $cat_id = $row['cat_id'];
          $image =$row['image'];
          $id=$row['id'];
        }

    }
}


?>


<div class="container">
<form method="post" enctype="multipart/form-data" action="" >
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" required="">
                </div>   
    <div class="form-group">
    <label for="exampleInputEmail1">Post Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo $title; ?>" required aria-describedby="emailHelp" placeholder="Enter Post Title">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Category ID</label>
    <input type="text" name="cat_id" class="form-control" id="exampleInputEmail1" value="<?php echo $cat_id; ?>" required aria-describedby="emailHelp" placeholder="Enter Post Category">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input type="text" name="status" class="form-control" id="exampleInputEmail1" value="<?php echo $status; ?>" required aria-describedby="emailHelp" placeholder="Enter Post Status">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Body</label>
    <textarea class="form-control" name="body"  id="exampleFormControlTextarea1">
    <?php echo $body; ?>
    </textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Select Image file</label>
    <input type="file" name="image" class="form-control-file" required id="exampleFormControlFile1">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<?php include_once './include/footer.php' ?>