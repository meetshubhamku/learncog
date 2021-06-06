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

<div class="container-fluid px-5 my-5 pt-4">
  <div id="title" class="center">
    <h2 id="header" class="text-center mt-5">E-Book Search</h2>
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