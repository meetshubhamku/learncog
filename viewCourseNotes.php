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
  function random_back()
  {
    $back = array("back.png", "back2.png", "back3.png", "back4.png", "back5.png");
    $back = $back[array_rand($back)];
    return $back;
  }
  include "./db.php";
  $sql = "select * from course_category where course_id in (select DISTINCT note_category from notes) order by course_name";
  $result = $conn->query($sql);
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

<!-- Banner -->
<div class="jumbotron back-gradient pt-5 mt-5">
  <h1 class="mt-4 text-white text-center"> Available Courses </h1>
  <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
</div>

  <div class="container-fluid px-5 py-4">

    <!-- Card Section 1 -->
    <div class="row">
    <?php 
      
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {
          $back = random_back();
          ?>
            <div class="col-sm-4 my-2">
              <div class="card text-white border-round back-shadow">
                <img src="./assets/<?php echo $back; ?>" class="card-img border-round" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">  <?php echo $row['course_name']; ?></h5>
                  <p class="card-text"><?php echo $row['course_description']; ?></p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt sequi esse ratione adipisci corrupti.</p>
                  <form action="./viewNotes.php" method="POST">
                    <input type="hidden" name="courseId" value="<?php echo $row['course_id']; ?>" />
                    <button class="btn bg-red letter-space-2 px-3 text-white">Start</button>
                  </form>
                </div>
              </div>
            </div>
          <?php
        }
      }
      else
      {
        ?>
          <h2 class="text-center text-danger my-5">No content available</h2>
        <?php
      }
    ?>
    </div>
  </div>
<?php include "./footer.php"; ?>
</body>
</html>