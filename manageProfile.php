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

<div class="jumbotron back-gradient pt-5 mt-5">
  <h1 class="mt-4 text-white text-center">  <?php echo $_SESSION['uname']; ?>'s Profile </h1>
  <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
</div>

<div class="container-fluid py-4 px-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
      <img  style="height: 200px; width:200px; border:none;" 
            src="https://joeschmoe.io/api/v1/<?php echo $_SESSION['uname']; ?>" 
            class="img-thumbnail" alt="..."
      />
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 text-left">
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Name</small>
            <label for="exampleInputEmail1"><?php echo $_SESSION['uname']; ?></label>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-left">
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Email</small>
            <label for="exampleInputEmail1"><?php echo $_SESSION['uemail']; ?></label>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-left">
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Role</small>
            <label for="exampleInputEmail1"><?php echo $_SESSION['urole']==1?"Admin":"User";  ?></label>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-left">
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Status</small>
            <label for="exampleInputEmail1" class="<?php echo $_SESSION['ublock']==1?"text-danger":"text-success" ?> font-weight-bold">
              <?php echo $_SESSION['ublock']==1?"Blocked":"Active" ?>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "./footer.php"; ?>
</body>
</html>