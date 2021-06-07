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
  
  function randomColor()
  {
    $color_code= array('#fc4364', '#8260d8');
    return $color_code[array_rand($color_code)];
  }
  include "./db.php";
  $sql = "select * from blogs";
  $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body class="bg-grey" onload="hideLoader();">
<!-- Loader -->
<?php include "./loader.php"; ?>
<!-- navbar -->
<?php include "./navbar.php"; ?>
<div class="container-fluid mt-5 pt-5 px-5">
  <h1 class="text-center text-red">Blogs</h1>
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 order-1">
      <div class="row">
      <?php
        if ($result->num_rows > 0) 
        {
          while($row = $result->fetch_assoc()) 
          {
            $color = randomColor();
            ?>
              <!-- style="background-color: <?php echo $color; ?>; color:white;" -->
              <div class="col-lg-12 col-md-12 col-sm-12 my-2">
                <div class="card bg-white" >
                  <div class="card-body" >
                    <h5 class="card-title text-blue"><?php echo $row['blog_title']; ?></h5>
                    <div class="card-text"> <?php echo $row['blog_description']; ?> </div>
                    <!-- <a href="#" class="btn btn-primary">Read</a> -->
                  </div>
                </div>
              </div>
            <?php
          }
        }
      ?>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 order-sm-1">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
    </div>
  </div>
</div>
<?php include "./footer.php"; ?>

</body>
</html>



