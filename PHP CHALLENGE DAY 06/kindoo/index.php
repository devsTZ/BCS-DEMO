
<?php include_once './includes/header.php';
require_once './assets/database/database.php';
?>






<!-- end logo ads -->
  <div class="row">
    <div class="col-12 col-md-8 mt-2">
<!--  -->
<?php
 $sql ="SELECT * FROM posts WHERE status = 11 LIMIT 1";
 $result = $conn -> query($sql);
 while($rows = $result -> fetch_assoc()):
?>
      <div class="card bg-dark text-white" >
        <img src="./panel/post/uploads/images/<?php echo $rows['image'] ?>" class="card-img" alt="...">
        <a href="./ready_post.php?id=<?php echo $rows['id'];?>" class="text-light">
        <div class="card-img-overlay" style="background-color: #040f087a;">
          <span class="btn btn-success">Technology</span>
          <p class="card-text" style="background-color: #040f087a;"><?php echo $rows['title'] ?></p>
        </div>
        </a>
      </div>
      <?php endwhile; ?>

    </div>
    <!-- End col -->
    <div class="col-12 col-md-4 mt-2">
      <?php

        $sql ="SELECT * FROM posts WHERE status = 10 LIMIT 2";
        $result = $conn -> query($sql);
        while($rows = $result -> fetch_assoc()):?>

    <div class="card bg-dark text-white mb-2">
    
        <img class="card-img" src="./panel/post/uploads/images/<?php echo $rows['image'] ?>" alt="Card image">
        <a href="./ready_post.php?id=<?php echo $rows['id'];?>" class="text-light">
        <div class="card-img-overlay"  style="background-color: #040f087a;">
          
        <span class="badge bg-success">Technology</span>
          <p class="card-text " style="background-color: #040f087a;"><?php echo $rows['title'] ?></p>
          
        </div>
        </a>
       </div>
       <?php endwhile; ?>

       <!--  -->
       
       <!--  -->
    </div>
    <!-- End row -->
  </div>

 
  <div class="row">
    <?php
      $limit = 9;
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }else{
        $page = 1;
      }
      $start_from = ($page - 1) * $limit;
         $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $start_from, $limit ";
         $result = $conn->query($sql);
         ?>
 
       <?php
      while($rows = $result ->fetch_assoc()): ?>
    
  <div class="col-12 col-md-4 mt-2 d-flex align-item-stretch">
    <div class="card">
      <img src="./panel/post/uploads/images/<?php echo $rows['image'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <span class="badge bg-success">Technology</span>
        
          <a href="./ready_post.php?id=<?php echo $rows['id']; ?>" class="card-text text-dark nav-link"><?php echo $rows['title'] ?></a>
        
      </div>
    </div>
  </div>
 
<?php
endwhile;
?>

</div>
<br><br>
<?php 

$result_db = mysqli_query($conn, "SELECT COUNT(id) FROM posts");
$row_db = mysqli_fetch_row($result_db);
$total_records = $row_db[0];
$total_pages = ceil($total_records / $limit);

$pagLink = "<ul class='pagination bg-light p-2'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item '><a class='page-link bg-success text-light' href='index.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>










<?php  include_once './includes/footer.php'; ?>