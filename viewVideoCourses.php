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
<body class="" onload="hideLoader();">

 <!-- Loader -->
 <?php include "./loader.php"; ?>

 <!-- navbar -->
<?php include "./navbar.php"; ?>
<div class="container-fluid my-5 pt-5 px-5">
    <h1 class="text-center font-weight-bold letter-space-2">Video Courses</h1>
    <!-- Card Section 1 -->
    <div class="row">
    <?php 
      
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {
          ?>
            <div class="col-sm-4 my-2">
              <div class="card bg-blue text-white">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/video.png"/></i>
                    <?php echo $row['course_name']; ?>
                  </h5>
                  <p class="card-text"><?php echo $row['course_description']; ?></p>
                  <form action="./viewVideo.php" method="POST">
                    <input type="hidden" name="courseId" value="<?php echo $row['course_id']; ?>" />
                    <button href="./viewVideoCourses.php" class="btn bg-red letter-space-2 pt-3 px-3 text-white">Start</button>
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