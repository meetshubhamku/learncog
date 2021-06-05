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
    $courseId=$_POST['courseId'];
    include "./db.php";
    $sql = "select * from videos where video_category=".$courseId;
    $result = $conn->query($sql);
  }
?>


<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body onload="hideLoader();">

  <!-- Loader -->
  <?php include "./loader.php"; ?>


  <?php include "./navbar.php"; ?>
  
  <?php
  if ($result->num_rows > 0) 
    {
      ?>
      <div class="container">
        <h2 class="text-center my-4">Available Videos</h2>
        <div class="row">
        <?php
        while($row = $result->fetch_assoc()) 
        {
          ?>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                  <iframe class="embed-responsive-item" src="<?php echo $row['video_link']; ?>" allowfullscreen></iframe>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['video_title']; ?></h5>
                    <p class="card-text"><?php echo $row['video_description']; ?></p>
                  </div>
                </div>
              </div>
          <?php
        }
        ?>
        </div>
      </div>
      <?php
    }
    else
      {
        ?>
          <h2 class="text-center text-danger my-5">No content available</h2>
        <?php
      }
  ?>
  <?php include "./footer.php"; ?>   
</body>
</html>