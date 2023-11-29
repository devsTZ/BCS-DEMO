<?php
include './include/header.php';
// include config file
require_once '../../assets/database/database.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true){
  header("location: ../index.php ");
}


?>
<div class="container-fluid">

<div class="row">

   <div class="col-md-12">
    <div class="mt-5 mb-3 clearfix">
      <h2 class="pull-left">Posts Details</h2>
    <a href="./create_post.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
 </div>
   </div>
</div>

<?php 
//  Slect Query Execution
$sql = "SELECT * FROM posts";
if($result = $conn -> query($sql)){
    if($result -> num_rows > 0){
?>

  <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">body</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

        <?php 
        while($row = $result -> fetch_array()){
            
        ?>
 <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><img src="./uploads/images/<?php echo $row['image'] ?>" width="50" alt=""></td>
      <td><?php echo $row['title'] ?></td>
      <td><?php echo $row['cat_id']; ?></td>
      <td><?php echo $row['body']; ?></td>
      <td><?php echo $row['status']; ?></td>
    <td>
     <?php echo  '<a href="edit_post.php?id='. $row['id']. '" class="btn btn-warning">Edit</a>'; ?>
     <?php echo  '<a href="delete_post.php?id='. $row['id']. '" class="btn btn-danger">Delete</a>'; ?>
    </td>


    </tr>

<?php
        }

?>

   

    
  </tbody>
</table>

<?php
//  Free result set
    }else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>'; 
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}
// close Connection

$conn -> close();
?>
</div>

<?php include './include/footer.php'; ?>