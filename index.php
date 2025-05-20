<?php 
include 'database.php';
if(isset($_POST['save'])){
  $nm=$_POST['name'];
  $tal=$_POST['talent_title'];
  $des=$_POST['description'];
  $weka = mysqli_query($con,"INSERT INTO talents VALUES('','$nm','$tal','$des')");
    if($weka >0){
      $send = "Successfully saved...";
    }
}

?>
<?php include 'link.php'; ?>
    <div class="container">
      <img src="images/logo.jpg" alt="">
     <h1 class="text-success">University Talent and Innovation Showcase Platform</h1>
   <form action="" method="POST">
    <p style="font-size: 25px; color: green; font-weight: bold;"><?php echo @$send; ?></p>
<label for="">Student name</label><br>
<input type="text" name="name" class="form-control w-75"  placeholder="Enter your name" required><br>
<label for="">Talent/Inovation Tittle</label><br>
<input type="text" name="talent_title" class="form-control w-75" placeholder="Enter your talent/innovation title"><br>
<label for="">Talent/Innovation Description</label><br>
<textarea name="description" class="form-control w-75" id="" placeholder="Tell more about your talent/innovation" required></textarea><br>
<label for="">Contacts</label><br>
<input type="text" name="contacts" class="form-control w-75" placeholder="Enter your contacts information"><br>
<button type="submit" class="btn btn-primary" name="save">Submit</button>
<a href="student_talent.php" class="btn btn-success">View Student talents</a>
   </form>
    </div>
</body>
</html>