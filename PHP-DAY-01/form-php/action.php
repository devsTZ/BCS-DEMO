<!-- Example 2 -->
<!-- Printing Data from our form -->
<?php
if(isset($_POST['name'])){
    ?>
    Hi <?php echo htmlspecialchars($_POST['name']);  ?>. <br>
    You are <?php echo (int)$_POST['age'];?> Years old;
<?php
}

?>