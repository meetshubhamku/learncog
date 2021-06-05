<?php

session_start();

if(isset($_POST['login']))
{
  $email=strtolower($_POST['email']);
  $pass = $_POST['pass'];
  
  $pass = md5($pass);
  include "./db.php";
  $sql = "select * from users where user_email='".$email."' and user_password='".$pass."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
    $_SESSION["uid"]=$row['user_id'];
    $_SESSION["uname"]=$row['user_name'];
    $_SESSION["uemail"]=$row['user_email'];
    $_SESSION["urole"]=$row['user_role'];
    $_SESSION["ublock"]=$row['is_block'];
    if($_SESSION["urole"]==1)
    {
      echo "<script>window.location.replace('./adminDashboard.php');</script>";
    }
    else if($_SESSION["urole"]==0)
    {
      echo "<script>window.location.replace('./userDashboard.php');</script>";
    }
    
  } else {
    echo "<script>alert('Invalid Credentials.')</script>";
    echo "<script>window.location.replace('./login.php');</script>";
  }
}
else
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}

?>