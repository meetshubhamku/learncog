<?php

if(isset($_POST['addVideo']))
{
  $videoTitle=trim($_POST['videoTitle']);
  $videoDescription=trim($_POST['videoDescription']);
  $videoLink=trim($_POST['videoLink']);
  $videoCategory=$_POST['videoCategory'];

  include "./db.php";
  $sql = "insert into videos (video_title, video_link, video_description, video_category) values ('".$videoTitle."', '".$videoLink."', '".$videoDescription."', ".$videoCategory.")";
  if ($conn->query($sql) === TRUE)
  {
    echo "<script>alert('Video added successfully')</script>";
    echo "<script>window.location.replace('./manageVideoCourses.php');</script>";
  }
  else
  {
    echo "<script>alert('Some error occured. Retry again.')</script>";
    echo "<script>window.location.replace('./manageVideoCourses.php');</script>";
  }

}
else
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>