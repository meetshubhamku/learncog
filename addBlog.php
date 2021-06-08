<?php
session_start();

if(isset($_POST['addBlog']))
{
  $blogTitle = $_POST['blogTitle'];
  $blogShortTitle=$_POST['blogShortTitle'];
  $blogCategory=$_POST['blogCategory'];
  $blogDescription = $_POST['blogDescription'];
  include "./db.php";
  $sql = "INSERT into blogs (blog_title, blog_short_description, blog_long_description, blog_category) values ( '$blogTitle', '$blogShortTitle', '$blogDescription', $blogCategory)";
  if ($conn->query($sql) === TRUE)
  {
    echo "<script>alert('Blog added successfully')</script>";
    echo "<script>window.location.replace('./manageBlogs.php');</script>";
  }
  else
  {
    echo "<script>alert('Some error occured. Retry again.')</script>";
    echo "<script>window.location.replace('./manageBlogs.php');</script>";
  }
}
else
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}

?>