<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php"; ?>
<body class="back" onload="hideLoader();">
  <!-- Loader -->
  <?php include "./loader.php"; ?>

  <?php include "./navbar.php"; ?>
  <div class="container py-5" >
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-10 mx-auto form-box">
        <form method="POST" action="./performLogin.php">
          <div class="mb-4">
            <h2 class="text-center my-1">SignIn</h2>
            <h6 class="text-center my-1">Please fill the below details.</h6>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
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
            <label for="exampleInputPassword1">Password</label>
            <input
              name="pass"
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              aria-describedby="passHelp"
              required
            />
            <small id="passHelp" class="form-text text-muted"
              >Always keep your password safe.</small
            >
          </div>
          
          <button name="login" type="submit" class="btn btn-primary btn-block back">
            Submit
          </button>
          <p class="text-center my-2"><a href="./registration.php">Create an account</a></p>
        </form>
      </div>
    </div>
  </div>

  <?php include "./footer.php"; ?>
</body>
</html>