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
  function FormatDate($str)
  {
    $date = "";
    $str = (explode("-",$str));
    $monthArray = array('01'=>'Jan', '02'=>'Feb', '03'=>'Mar', '04'=>'Apr', '05'=>'May', 
                        '06'=>'Jun', '07'=>'Jul', '08'=>'Aug', '09'=>'Sep', '10'=>'Oct',
                        '11'=>'Nov', '12'=>'Dec');
    $date = $monthArray[$str[1]]." ".$str[2].", ".$str[0];
    return $date;
  }

  $blogId = (int)$_REQUEST['blogid'];
  include "./db.php";
  $sql = "select * from blogs where blog_id = $blogId";
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
<!-- banner -->
<div class="jumbotron back-gradient pt-5 mt-5">
  <h1 class="mt-4 text-white text-center"> Blog </h1>
  <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
</div>
<div class="container-fluid mt-5 pt-5 px-5">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 order-1">
      <div class="row">
      <?php
        if ($result->num_rows > 0) 
        {
          while($row = $result->fetch_assoc()) 
          {
            ?>
              <div class="col-lg-12 col-md-12 col-sm-12 my-2">
                <div class="card bg-white" >
                  <div class="card-body" >
                    <h5 class="card-title text-blue"><?php echo $row['blog_title']; ?></h5>
                    <p class="card-text">
                    <i class="mr-1"><img src="https://img.icons8.com/material/24/000000/planner--v1.png"/></i>
                      <?php echo FormatDate($row['blog_time']); ?>
                    </p>
                    <p class="card-text"> <?php echo $row['blog_long_description']; ?> </p>
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
      <div class="progress my-3">
        <div class="progress-bar" style="width:80%"></div>
      </div>
      <div class="progress my-3">
        <div class="progress-bar" style="width:70%"></div>
      </div>
      <div class="progress my-3">
        <div class="progress-bar" style="width:90%"></div>
      </div>
      <div class="card my-2">
        <div class="card-body">
          <h5 class="card-title">Special Offer</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, accusantium.</p>
          <a href="#" class="btn bg-red text-white"> Learn More </a>
        </div>
      </div>
      <div class="col-12">
        <form class="form-inline">
          <div class="form-group mr-sm-1">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="password" required class="form-control" id="inputPassword2" placeholder="Comment">
          </div>
          <button type="submit" class="btn bg-red mx-3 px-4"> 
            <i><img src="https://img.icons8.com/material/24/ffffff/sent--v1.png"/></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "./footer.php"; ?>

</body>
</html>



