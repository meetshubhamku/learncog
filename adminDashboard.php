<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=1)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
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
  
  <div class="container-fluid mt-5 py-5 px-5">
    <h1 class="pl-1 mt-5 text-center">Dashboard</h1>
    <!-- Card Section 1 -->
    <div class="row mt-4">
      <!--Course Category -->
      <div class="col-sm-4 my-2 ">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/sorting-answers.png"/></i>
            Course Categories</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageCourseCategory.php" class="btn bg-red px-3 text-white">Manage</a>
          </div>
        </div>
      </div>
      <!-- Video Course -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/video.png"/></i>
            Video Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageVideoCourses.php" class="btn bg-red px-3 text-white">Manage</a>
          </div>
        </div>
      </div>
      <!-- PHP playground -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/php.png"/></i>
            PHP Playground</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./phpPlayground.php" target="_blank" class="btn bg-red px-3 text-white">Manage</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Section 2 -->
    <div class="row">
      <!-- User management -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/gender-neutral-user--v1.png"/></i>
            User Management</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageUser.php" class="btn bg-red px-3 text-white">Manage</a>
          </div>
        </div>
      </div>
      <!-- Notes Tutorials -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/task.png"/></i>
            Notes Management</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageNotes.php" class="btn bg-red px-3 text-white">Manage</a>
          </div>
        </div>
      </div>
      <!-- Blog section -->
      <div class="col-sm-4 my-2">
        <div class="card bg-blue text-white">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/ffffff/google-blog-search.png"/></i>
            Blog Management</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageNotes.php" class="btn bg-red px-3 text-white">Manage</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "./footer.php"; ?>
</body>
</html>