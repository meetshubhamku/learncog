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
  include "./db.php";
  $sql = "select * from blogs";
  $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body onload="hideLoader();" class="bg-grey">
  <!-- Loader -->
  <?php include "./loader.php"; ?>
  <!-- navbar -->
  <?php include "./navbar.php"; ?>
  <!-- banner -->
  <div class="jumbotron back-gradient pt-5 mt-5">
    <h1 class="mt-4 text-white text-center">Blogs</h1>
    <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
  </div>
  <div class="container-fluid pb-3 px-4">
    <div class="row">
      <?php
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {
          ?>
          <div class="col-sm-4 my-2 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-blue"><?php echo $row['blog_title']; ?></h5>
                <!-- <p class="card-text"><?php echo $row['blog_title']; ?></p> -->
                <p class="card-text"><?php echo $row['blog_short_description']; ?></p>
                <p class="card-text">
                  <i class="mr-1"><img src="https://img.icons8.com/material/24/000000/planner--v1.png"/></i>
                  <?php echo FormatDate($row['blog_time']); ?>
                </p>
                <a href="./viewBlog.php?blogid=<?php echo $row['blog_id']; ?>" class="btn bg-red letter-space-2 px-3 text-white">Read</a>
              </div>
            </div>  
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
  <?php include "./footer.php"; ?>
</body>
</html>