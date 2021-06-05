<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php"; ?>
  <body class="" onload="hideLoader();">

    <!-- Loader -->
    <?php include "./loader.php"; ?>

    <!-- navbar -->
    <?php include "./navbar.php"; ?>


    <div class="container-fluid bg-grey mt-5 pt-5">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-10 mx-auto my-5 form-box">
          <form method="POST" action="./performSignup.php">
            <div class="mb-4">
              <h5 class="text-center my-1 text-muted">Sign Up to LearnCog</h5>
            </div>
            
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="text-muted">Name</label>
                  <input
                    name="uname"
                    type="text"
                    class="form-control"
                    id="exampleInputName1"
                    aria-describedby="NameHelp"
                    required
                  />
                  <small id="NameHelp" class="form-text text-muted"
                    >Enter your full name.</small
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
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-muted">Password</label>
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
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputPassword2" class="text-muted">Confirm Password</label>
                  <input
                    name="cpass"
                    type="password"
                    class="form-control"
                    id="exampleInputPassword2"
                    aria-describedby="passHelp"
                    required
                  />
                  <small id="passHelp" class="form-text text-muted"
                    >Both passwords should match.</small
                  >
                </div>
              </div>
              <div class="container-fluid text-center pt-3">
                <button name="registration" type="submit" class="btn rounded-pill bg-red align-self-left text-white px-4 py-2">
                    Submit
                </button>
                <p class="text-center mt-3">
                  <a class="text-muted px-4 py-2" href="./index.php">Cancel</a>
                </p>
              </div>
            </div>
            
          </form>


          

        </div>
      </div>
    </div>

    <?php include "./footer.php"; ?>
  </body>
</html>
