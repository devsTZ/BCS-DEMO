
<?php require_once './include/header.php'; ?>
<?php
// include config file
require_once './database/config.php';

?>
<div class="container-fluid">

<div class="row">

   <div class="col-md-12">
    <div class="mt-5 mb-3 clearfix">
      <h2 class="pull-left">Employees Details</h2>
    <a href="./create_page.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
 </div>
   </div>
</div>

<?php 
//  Slect Query Execution
$sql = "SELECT * FROM db_one";
if($result = $conn -> query($sql)){
    if($result -> num_rows > 0){
?>

  <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

        <?php 
        while($row = $result -> fetch_array()){
            
        ?>
 <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name'] ?></td>

      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['salary']; ?></td>
    <td>
     <?php echo  '<a href="edit_page.php?id='. $row['id']. '" class="btn btn-warning">Edit</a>'; ?>
     <?php echo  '<a href="delete_page.php?id='. $row['id']. '" class="btn btn-danger">Delete</a>'; ?>
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
<?php require_once './include/footer.php' ?>