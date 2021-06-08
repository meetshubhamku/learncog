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
<?php include "./head.php"; ?>
<body class="bg-grey" onload="hideLoader();">

<!-- Loader -->
<?php include "./loader.php"; ?>

<!-- Navbar -->
<?php include "./navbar.php"; ?>

<!-- banner -->
<div class="jumbotron back-gradient pt-5 mt-5">
    <h1 class="mt-4 text-white text-center">Blog Management </h1>
    <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
  </div>

<div class="container-fluid py-4 px-5">
  <div class="row">
    <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Add</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Delete</a>
      </div>
    </div>
    <div class="col-8 px-5">
      <div class="tab-content" id="nav-tabContent">
        <!-- Add blog -->
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <form action="./addBlog.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-muted">Blog Title</label>
              <input name="blogTitle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">Add a small title to the blog.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2" class="text-muted">Short Description</label>
              <input name="blogShortTitle" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">Provide a small description to the blog.</small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select name="blogCategory" class="form-control" id="exampleFormControlSelect1" required>
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
              <label for="blogDesc" class="text-muted">Blog Description</label>
              <textarea name="blogDescription" class="text-dark" id="ckeditor"></textarea>
              <small id="deschelp" class="form-text text-muted">Provide a description to the blog.</small>
            </div>
            <button type="submit" name="addBlog" class="btn bg-red text-white">Submit</button>
          </form>
        </div>

        <!-- Other operation -->
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
        
      </div>
    </div>
  </div>
</div>
<?php include "./footer.php"; ?>
<script>
  CKEDITOR.replace('ckeditor')
</script>
</body>
</html>