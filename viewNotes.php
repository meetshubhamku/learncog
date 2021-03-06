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
    $sql = "select * from notes where note_category=".$courseId;
    $result = $conn->query($sql);
  }
?>


<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body onload="hideLoader();">

  <!-- Loader -->
  <?php include "./loader.php"; ?>

  <!-- Navbar -->
  <?php include "./navbar.php"; ?>

  <!-- Banner -->
  <div class="jumbotron back-gradient pt-5 mt-5">
    <h1 class="mt-4 text-white text-center"> Notes </h1>
    <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
  </div>
  
  <?php
  if ($result->num_rows > 0) 
    {
      ?>
      <div class="container-fluid py-3 px-5">
  
        <div class="row">
        <?php
        while($row = $result->fetch_assoc()) 
        {
          ?>
              
                <div class="card bg-grey mb-3" style="max-width: 18rem;">
                  <div class="card-header font-weight-bold"><?php echo $row['note_title']; ?></div>
                  <div class="card-body">
                    <p class="card-text text-muted"><?php echo $row['note_description']; ?></p>
                    <a target="_blank" href="<?php echo $row['note_link']; ?>">
                      <i class="mr-2"><img src="https://img.icons8.com/material/24/000000/external-link.png"/></i>
                      View
                    </a>
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
          <div class="container-fliud my-5 py-5">
            <h2 class="text-center text-danger my-5 py-5">No content available</h2>
          </div>
        <?php
      }
  ?>
  <?php include "./footer.php"; ?>   
</body>
</html>