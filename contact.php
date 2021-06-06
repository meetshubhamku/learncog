<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php"; ?>
  <body onload="hideLoader();" class="bg-grey">
    <!-- Loader -->
    <?php include "./loader.php"; ?>
    <!-- Navbar -->
    <?php include "./navbar.php"; ?>
    <!-- deta -->
    <div class="jumbotron back-gradient pt-5 mt-5">
      <h1 class="mt-4 text-white text-center">Contact</h1>
      <p class="text-center text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorum?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, soluta?</p>
    </div>
    <div class="container-fluid bg-grey mt-1 py-1">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-10 my-2 px-5 mx-auto form-box">
          <form method="POST" action="">
            <div class="mb-4">
              <h5 class="text-center my-1 text-muted">Details</h5>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-muted">Name</label>
              <input
                name="name"
                type="name"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                required
              />
              <small id="emailHelp" class="form-text text-muted"
                >Provide your fullname</small
              >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-muted">Email</label>
              <input
                name="email"
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                required
              />
              <small id="emailHelp" class="form-text text-muted"
                >We'll never share your email with anyone else.</small
              >
            </div> 
            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="text-muted">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
              <small id="emailHelp" class="form-text text-muted"
                >Provide your query.</small
              >
            </div> 
            <div class="form-group mt-5">
              <button name="login" type="submit" class="btn rounded-pill bg-red text-white px-4">
                  Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include "./footer.php"; ?>
  </body>
</html> 