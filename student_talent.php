<?php 
include 'database.php';
$view='';
$take= mysqli_query($con,"SELECT * FROM talents");
while($see=mysqli_fetch_array($take)){
     $id=$see['id'];
     $gname=$see['name'];
     $gtal=$see['talent_title'];
     $gdes=substr($see['description'], 0, 30);
     $view.="
               <p><strong>Student name:</strong> $gname</p>
               <p><i>Title: </i> $gtal</p>
               <p><strong>Description: </strong>$gdes <strong><a href='description.php?id=$id' class='text-primary' style='text-decoration: none; font-size: 20px;'>Read description</a></strong></p>
               <hr>
     ";
     
}

?>
<?php include 'link.php'; ?>

<div class="container">
     <h2 class="text-success">University Showcase projects</h2>
     <a href="index.php" class="btn btn-warning">Go back</a>
     <p><?php echo $view; ?></p>
</div>
