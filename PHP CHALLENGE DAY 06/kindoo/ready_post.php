<?php 
include_once './includes/header.php';
include_once './assets/database/database.php';
?>
<div class="container">

<div class="row">
    

    <div class="col-md-8">
<?php
        
        $id = $_GET['id'];
        $sql ="SELECT * FROM posts WHERE id=$id";
        $result = $conn -> query($sql);
        while($rows = $result -> fetch_assoc()):?>

         <h1 class="card-title ml-2"><?php echo $rows['title'] ?></h1>
  <p class="card-text ml-4">
    <small class="text-light bg-success p-2">Technology</small>
  </p>
  <p>
    <?php echo $rows['body']; ?>
  </p>
    
  
   <?php 
endwhile;  
?>
    </div>
 
    <div class="col-12 col-md-4 mt-2">
      <?php

        $sql ="SELECT * FROM posts  WHERE cat_id = 2 LIMIT 2";
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
  </div>

  <!--  -->
<div class="row">
<h4 class="text-muted">Recommended Post</h4>
</div>
  <div class="row">

    <?php
         $sql = "SELECT * FROM posts ORDER BY rand() LIMIT 3";
         $result = $conn->query($sql);
         ?>
 
       <?php
      while($rows = $result ->fetch_assoc()): ?>
    
  <div class="col-12 col-md-4 mt-2 d-flex align-item-stretch">
    <div class="card">
      <img src="./panel/post/uploads/images/<?php echo $rows['image'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <span class="badge bg-success">Tech</span>
        
          <a href="./ready_post.php?id=<?php echo $rows['id']; ?>" class="card-text text-dark nav-link"><?php echo $rows['title'] ?></a>
        
      </div>
    </div>
  </div>
 
<?php
endwhile;
?>

</div>

</div>

<?php include_once './includes/footer.php' ?>