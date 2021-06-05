<?php

if(isset($_POST['registration']))
{
  $name=ucwords($_POST['uname']);
  $email= strtolower($_POST['email']);
  $pass = $_POST['pass'];
  $cpass=$_POST['cpass'];

  if($pass==$cpass && $name!="" && $email!="" && $pass!="")
  {
    $pass = md5($pass);
    include "./db.php";
    $sql = "INSERT INTO users (user_name,user_email,user_password) values ('".$name."','".$email."','".$pass."')";
    if ($conn->query($sql) === TRUE)
    {
      echo "<script>alert('Registration successful.')</script>";
      echo "<script>window.location.replace('./login.php');</script>";
    }
    else
    {
      echo "<script>alert('Registration Failed. Retry again.')</script>";
      echo "<script>window.location.replace('./registration.php');</script>";
    }
  }
  else{
    echo "<script>alert('All fields are mandatory.')</script>";
    echo "<script>window.location.replace('./registration.php');</script>";
  }
}
else{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}

?>