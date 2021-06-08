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
<body class="" onload="hideLoader();">

   <!-- Loader -->
   <?php include "./loader.php"; ?>
   
  <!-- Navbar Section -->
  <?php include "./navbar.php"; ?>

  <!-- Banner -->
  <div class="jumbotron back-gradient pt-5 mt-5">
    <h1 class="mt-4 text-white text-center"> Dashboard </h1>
    <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
  </div>

  <!-- Dashborad section -->
  <div class="container-fluid px-5 py-2 ">
    <!-- Card Section 1 -->
    <div class="row">
      <!--Video courses -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/video.png"/></i>
            Video Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./viewVideoCourses.php" class="btn bg-red letter-space-2 px-3 text-white">Learn</a>
          </div>
        </div>
      </div>
      <!-- E Books -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body bg-blue text-white">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/book-stack--v1.png"/></i>
            E-Books</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageEbooks.php" class="btn bg-red letter-space-2 px-3 text-white">Learn</a>
          </div>
        </div>
      </div>
      <!-- PHP Playground -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/php.png"/></i>
            PHP Playground</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./phpPlayground.php" target="_blank" class="btn bg-red letter-space-2 px-3 text-white">Learn</a>
          </div>
        </div>
      </div>
      <!--Notes category -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/task.png"/></i>
            Course Notes</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./viewCourseNotes.php" class="btn bg-red letter-space-2 px-3 text-white">Learn</a>
          </div>
        </div>
      </div>
      <!-- BLog Category -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/blogloving.png"/></i>
            Blogs</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./allBlogs.php" class="btn bg-red letter-space-2 px-3 text-white">Learn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <!-- Footer section -->
  <?php include "./footer.php"; ?>
</body>
</html>