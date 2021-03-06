<?php
session_start();

include "./db.php";
include "./db.php";
  $sql = "select count(*) as course_count from course_category";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
    $course_count = $row['course_count'];
  }
  $sql = "select count(*) as user_count from users";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
    $user_count = $row['user_count'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php"; ?>
  <body class="" onload="hideLoader();">
    <!-- Loader -->
    <?php include "./loader.php"; ?>

    <!-- Navbar -->
    <?php include "./navbar.php" ?>
    <!-- Navbar End -->

    <!-- Landing section -->
    <div class="container-fluid px-5 mt-5 pt-5 back-gradient">
      <div class="row">
        <div class="col lg-6 col-md-6 col-sm-12 text-white py-5 px-5 d-flex flex-column justify-content-center">
          <div>
            <h6 style="font-size: 2rem;">Online Learning</h6>
            <h1 style="font-size: 4rem;" class="mb-2 ">Learn <strong class="text-white">Everyday</strong></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, consectetur? Perspiciatis delectus, facilis quidem doloribus culpa explicabo repellendus, quaerat ullam quod provident suscipit necessitatibus nihil voluptas doloremque mollitia dolorum quas.</p>
            <div>
              <a class="btn text-white px-4 font-weight-bold bg-red hover-blue" href="./registration.php">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col lg-6 col-md-6 col-sm-12 pt-5 px-5 text-white d-none d-md-block">
          <!-- <img src="./assets/home.png" class="img-fluid" alt="Responsive image"> -->
          <img src="./assets/home2.png" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>  

    <!-- Join Section -->
    <div class="container-fluid pt-5" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 py-5 px-5 text-white order-1 d-none d-md-block">
            <img src="./assets/flat.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col lg-6 col-md-6 col-sm-12 py-5 px-5 text-dark order-sm-1 d-flex flex-column justify-content-center">
            <h6 style="font-size: 2rem;">Get access to high quality learning!</h6>
            <h1 style="font-size: 4rem;" class="mb-4">Join Online Courses <strong class="text-red">Today</strong></h1>
            <p>Etiam velit purus, vehicula quis imperdiet dignissim, convallis vitae nisl. Nullam facilisi. Pellentesque non pulvinar justo. Nullam eget neque ut tellus ornare ullamcorper ulla ambco mattis for nulla glavrida egesed!</p>
            <div>
              <a class="btn bg-red text-white px-5 font-weight-bold" href="#">READ MORE</a>
            </div>
          </div>
        </div>  
      </div>
    </div>
    
    <!-- Course section -->
    <div class="container fluid">
      <h6 class="text-center mt-3 mb-2 text-red letter-space-2">< Why LearnCog > </h6>
      <h4 class="text-center my-2 font-weight-bold letter-space-2">Clear, Concise, Comprehensive, and Practical with No Fluff!</h4>
      <div class="container mt-5 pt-2">

        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 mx-auto order-1 text-lg-right d-flex flex-column justify-content-center ">
            <h6 class="text-red">STEP-BY-STEP LESSONS</h6>
            <h4 class="font-weight-bold">Simple and Beginner friendly</h4>
            <p class="text-muted">Time and time again, Mosh's students praise his ability to break down complex topics into simple, digestible lessons that anyone can understand.</p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 text-center order-sm-1 mx-auto">
           <img src="./assets/simple.png" alt="">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 text-center mx-auto">
           <img src="./assets/concise.png" alt="">
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 mx-auto text-lg-left d-flex flex-column justify-content-center">
            <h6 class="text-red">FAST-TRACK YOUR LEARNING</h6>
            <h4 class="font-weight-bold">Clear and Concise Lessons</h4>
            <p class="text-muted">Don't waste any more time on long, repetitive, and poorly-structured courses. Mosh's lessons are concise, right to the point, and free of rambling and unnecessary buzzwords. Everything explained in plain English.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 order-1 mx-auto text-lg-right d-flex flex-column justify-content-center">
            <h6 class="text-red">MASTER A TOP CODER MINDSET</h6>
            <h4 class="font-weight-bold">Learn from a True Expert</h4>
            <p class="text-muted">Benefit from Mosh's two decades of experience in the industry. Not only does he explain the whats, whys, and hows, he also shares tons of tips and tricks that help you code faster and with more confidence. Something that would take you years to learn on the job.</p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 text-center order-sm-1 mx-auto">
           <img src="./assets/tech.png" alt="">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 text-center mx-auto">
           <img src="./assets/lesson.png" alt="">
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 mx-auto text-lg-left d-flex flex-column justify-content-center">
            <h6 class="text-red">Fun and Engaging Lessons</h6>
            <h4 class="font-weight-bold">Clear and Concise Lessons</h4>
            <p class="text-muted">Shubham is a perfectionist and is fully obsessed with the quality of his videos. Beautiful graphics, slides, and animations help you stay focused, remember, and better understand the materials.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 order-1 mx-auto text-lg-right d-flex flex-column justify-content-center">
            <h6 class="text-red">BOOST YOUR CAREER OPTIONS</h6>
            <h4 class="font-weight-bold">Prepare for Jobs and Interviews</h4>
            <p class="text-muted">Shubham perfectly organized, in-depth, and comprehensive courses are packed with real-world examples and exercises that prepare you for the job.</p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 text-center order-sm-1 mx-auto">
           <img src="./assets/job.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- Subscription section -->
    <div class="container-fluid dark-gradient my-4 pt-5 pb-5"> 
      <h1 class="text-center text-white">All-access Membership</h1>
      <p class="text-center text-white">Why buy just one course when you can have them ALL?</p>
      <div class="row">
        <div class="text-white text-center mx-auto col-lg-3 col-md-3 col-sm-5 purple-gradient py-4" style="width: 50%;">
          <h1><?php echo $course_count; ?></h1>
          <h3 class="letter-space-2">Courses</h3>
        </div>
      </div>
    </div>

    <!-- Future section -->
    <div class="container-fluid bg-white">
      <div class="container pt-5 ">
        <div class="row">
          <div class="col lg-12 col-md-12 col-sm-12 py-5 px-5 ">
            <p class="text-center text-red letter-space-2"> < Hello World > </p>
            <h1 style="font-size: 4rem;" class="text-center font-weight-bold mb-4">
              The Future That You Will See Soon
            </h1>
            <div class="row">
              

              <div class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <div class="card text-center" style="border: none;">
                  
                  <div class="card-img-top rounded-circle align-self-center d-flex justify-content-center align-items-center" 
                    style="height: 170px; width:170px; background-color:#9102d0;">
                    <h1>
                      <img src="https://img.icons8.com/material/70/ffffff/here.png"/>
                    </h1>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">
                     UNLIMITED RESOURCES
                    </h5>
                    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <div class="card text-center" style="border: none;">
                  <!-- <img src="./assets/home.png" class="card-img-top rounded-circle" alt="..."> -->
                  <div class="card-img-top rounded-circle align-self-center d-flex justify-content-center align-items-center" 
                    style="height: 170px; width:170px; background-color:#9102d0; ">
                    <h1>
                      <img src="https://img.icons8.com/material/70/ffffff/infinity--v1.png"/>
                    </h1>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">UNLIMITED IDEAS</h5>
                    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <div class="card text-center" style="border: none;">
                  <!-- <img src="./assets/home.png" class="card-img-top rounded-circle" alt="..."> -->
                  <div class="card-img-top rounded-circle align-self-center d-flex justify-content-center align-items-center" 
                    style="height: 170px; width:170px; background-color:#9102d0;">
                    <h1>
                      <img src="https://img.icons8.com/material/70/ffffff/personal-growth.png"/>
                    </h1>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">UNLIMITED GROWTH</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "./footer.php"; ?>
  </body>
</html>
