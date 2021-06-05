<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=1)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
else
{
  include "./db.php";
  $sql="select * from course_category order by course_name";
  $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php" ?>
<body onload="hideLoader();">

  <!-- Loader -->
  <?php include "./loader.php"; ?>

  <!-- navbar -->
  <?php include "./navbar.php" ?>

  <div class="container py-5 ">
    <h2 class="text-center">Video Course Category</h2>
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Add</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Delete</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <form class="px-3" method="POST" action="./addVideo.php">
              <div class="form-group">
                <label for="exampleInputEmail2">Link</label>
                <input name="videoLink" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                <small id="emailHelp1" class="form-text text-muted">Add youtube link of the video.</small>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select name="videoCategory" class="form-control" id="exampleFormControlSelect1" required>
                  <?php
                    if ($result->num_rows > 0) 
                    {
                      while($row = $result->fetch_assoc()) 
                      {
                        ?>
                          <option value="<?php echo $row['course_id']; ?>"><?php echo $row['course_name']; ?></option>
                        <?php
                      }
                    }
                  ?>
                  
                </select>
                <small id="emailHelp3" class="form-text text-muted">Select a course category.</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input name="videoTitle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Add a title to the video.</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description (optional)</label>
                <textarea name="videoDescription" class="form-control" name="categoryDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                <small id="descHelp" class="form-text text-muted">Provide a small description.</small>
              </div>
              <button name="addVideo" type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          
          </div>
        </div>
      </div>
    </div>
  
  </div>

  <?php include "./footer.php" ?>
</body>
</html>