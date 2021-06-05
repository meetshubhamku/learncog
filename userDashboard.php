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
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body class="back" onload="hideLoader();">

   <!-- Loader -->
   <?php include "./loader.php"; ?>
   
  <!-- Navbar Section -->
  <?php include "./navbar.php"; ?>

  <!-- Dashborad section -->
  <div class="container my-5 ">
    <h1 class="text-center text-light">Dashboard</h1>

    <!-- Card Section 1 -->
    <div class="row">
      <!--Video courses -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/video.png"/></i>
            Video Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./viewVideoCourses.php" class="btn btn-success back">Learn</a>
          </div>
        </div>
      </div>
      <!-- E Books -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/book-stack--v1.png"/></i>
            E-Books</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageEbooks.php" class="btn btn-success back">Learn</a>
          </div>
        </div>
      </div>
      <!-- PHP Playground -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/php.png"/></i>
            PHP Playground</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./phpPlayground.php" target="_blank" class="btn btn-success back">Learn</a>
          </div>
        </div>
      </div>
      <!--Notes category -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/task.png"/></i>
            Course Notes</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./viewCourseNotes.php" class="btn btn-success back">Learn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <!-- Footer section -->
  <?php include "./footer.php"; ?>
</body>
</html>