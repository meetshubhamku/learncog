<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=0)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
else if($_SESSION['ublock']!=0)
{
  echo "<script>window.location.replace('./blockError.php');</script>";
}
else
{
  include "./db.php";
  $sql = "select * from course_category order by course_name";
  $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body class=" back" onload="hideLoader();">

 <!-- Loader -->
 <?php include "./loader.php"; ?>

 <!-- navbar -->
<?php include "./navbar.php"; ?>
<div class="container my-5">
    <h1 class="text-center font-weight-bold text-light">Video Courses</h1>
    <!-- Card Section 1 -->
    <div class="row">
    <?php 
      
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {
          ?>
            <div class="col-sm-4 my-2">
              <div class="card" style="border: 1px solid black;">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/video.png"/></i>
                    <?php echo $row['course_name']; ?>
                  </h5>
                  <p class="card-text"><?php echo $row['course_description']; ?></p>
                  <form action="./viewVideo.php" method="POST">
                    <input type="hidden" name="courseId" value="<?php echo $row['course_id']; ?>" />
                    <button href="./viewVideoCourses.php" class="btn btn-primary back">Start</button>
                  </form>
                </div>
              </div>
            </div>
          <?php
        }
      }
      else
      {
        ?>
          <h2 class="text-center text-danger my-5">No content available</h2>
        <?php
      }
    ?>
    </div>
  </div>
<?php include "./footer.php"; ?>
</body>
</html>