<?php 
  session_start(); 
  include "./db.php";
  $sql = "select * from course_category where course_id in (select DISTINCT video_category from videos) order by course_name";
  $result = $conn->query($sql);
 
  function random_back()
  {
    $back = array("back.png", "back2.png", "back3.png", "back4.png", "back5.png");
    $back = $back[array_rand($back)];
    return $back;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php"; ?>
  <body onload="hideLoader();" class="bg-grey">
    <!-- Loader -->
    <?php include "./loader.php"; ?>
    <!-- Navbar -->
    <?php include "./navbar.php"; ?>
    <!-- data -->
    <div class="jumbotron back-gradient pt-5 mt-5">
      <h1 class="mt-4 text-white text-center">Courses</h1>
      <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
    </div>
    <div class="container-fluid px-5 bg-grey">
      <div class="row">

      <?php 
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {
          $back = random_back();
        ?>
        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
          <div class="card text-white border-round back-shadow">
            <img src="./assets/<?php echo $back; ?>" class="card-img border-round" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title"><strong><?php echo $row['course_name']; ?></strong></h5>
              <p class="card-text"><?php echo $row['course_description']; ?></p>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus magni. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quam. </p>
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