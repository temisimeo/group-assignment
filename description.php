<?php
     include 'link.php';
     include 'database.php';

     if(isset($_GET['id'])){
          $id=$_GET['id'];
          $pc = mysqli_query($con,"SELECT * FROM talents WHERE id='$id'");
          while($cp=mysqli_fetch_array($pc)){
               $des = $cp['description'];
              
          }
     }

?>
<div class="container">
     <h2 class="text-info">Title Description</h2>
     <p style="background: whitesmoke; border-bottom: 2px solid blue; font-size: 25px;" class="w-75"><?php echo $des; ?></p>
     <a href="student_talent.php" class="btn btn-warning">Go back</a>
</div>