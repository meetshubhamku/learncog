<?php 
session_start(); 
if(!isset($_SESSION['urole']))
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body onload="hideLoader();">

  <!-- Loader -->
  <?php include "./loader.php"; ?>

  <!-- navbar -->
<?php include "./navbar.php"; ?>

<!-- Banner -->
<div class="jumbotron back-gradient pt-5 mt-5">
  <h1 class="mt-4 text-white text-center"> E-books </h1>
  <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
</div>

<div class="container-fluid px-5 py-3">
  <div id="title" class="center">
    <div class="row">
      <div id="input" class="input-group mx-auto col-lg-6 col-md-8 col-sm-12">
        <input id="search-box" type="text" class="form-control mx-3" placeholder="Search Books!...">
        <button id="search" class="btn bg-red letter-space-2 pt-2 px-3 text-white" onclick="">Search</button>
    </div>
    </div>
  </div>
  <div class="book-list mt-3" >
    <div id="list-output" class="">
      <div class="row">
        <!-- card  -->

      </div>

    </div>
  </div>
</div>
<!-- <?php include "./footer.php"; ?> -->
</body>
</html>