<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php"; ?>
<body class="" onload="hideLoader();">
  <!-- Loader -->
  <?php include "./loader.php"; ?>

  <?php include "./navbar.php"; ?>
  <div class="container-fluid bg-grey mt-5 py-5">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-10 my-5 px-5  mx-auto form-box">
        <form method="POST" action="./performLogin.php">
          <div class="mb-4">
            <h5 class="text-center my-1 text-muted">Log in to LearnCog</h5>
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
            <label for="exampleInputPassword1" class="text-muted" >Password</label>
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
          
          <div class="form-group text-center mt-5">
            <button name="login" type="submit" class="btn rounded-pill bg-red text-white px-4">
                Log In
            </button>
          </div>
         
          <!-- <div class="row">
            <div class="col-lg-5 col-md-5 mx-auto col-sm-12 text-center">
              <p class="text-center my-2">
                <a class="text-muted" href="./registration.php">Create an account</a>
              </p>
            </div>
            <div class="col-lg-5 col-md-5 mx-auto col-sm-12 text-center">
              <p class="text-center my-2 ">
                <a class="text-muted" href="">Forgot Password</a>
              </p>
            </div>
          </div> -->
        </form>

        <div class="container-fluid d-flex text-muted">
            <div
              style="position: relative; height: 100px; width: 50%"
              class="
                mr-1
                d-flex
                align-items-center
                justify-content-center
                hoverblue
              "
            >
              <a
                class=""
                style="text-decoration: none; color: inherit"
                href="./registration.php"
                >Create an account</a
              >
            </div>
            <div
              style="position: relative; height: 100px; width: 50%"
              class="
                ml-1
                d-flex
                align-items-center
                justify-content-center
                hoverred
              "
            >
              <a class="" style="text-decoration: none; color: inherit" href=""
                >Forgot Password</a
              >
            </div>
          </div>

      </div>
    </div>
  </div>

  <?php include "./footer.php"; ?>
</body>
</html>