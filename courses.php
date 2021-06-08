<?php 
  session_start(); 
  include "./db.php";
  $sql = "select * from course_category where course_id in (select DISTINCT video_category from videos) order by course_name";
  $result = $conn->query($sql);
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
        ?>
        <div class="col-lg-4 col-md-4 col-sm-12 ">
          <div class="card my-2">
            <div class="card-body">
              <h5 class="card-title"> 
                <i><img src="https://ui-avatars.com/api/?background=8260d8&size=40&color=fff&name=<?php echo $row['course_name']; ?>" class="img-thumbnail" alt="..."></i>
                <?php echo $row['course_name']; ?> 
              </h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
              <p class="card-text text-muted"> <?php echo $row['course_description']; ?> </p>
              <p class="card-text text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nulla! Lorem ipsum dolor sit amet.</p>
              <!-- <a href="./viewVideo.php?courseId=<?php echo $row['course_id']; ?>" class="card-link text-decoration-none text-red"> Learn </a> -->
              <!-- <a href="#" class="card-link">Another link</a> -->
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