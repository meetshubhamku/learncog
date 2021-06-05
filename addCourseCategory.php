<?php
if(isset($_POST['addvideocategory']))
{
  $categoryName=trim(strtoupper($_POST['categoryName']));
  $categoryDescription=trim($_POST['categoryDescription']);

  include "./db.php";
  $sql = "insert into course_category (course_name, course_description) values ('".$categoryName."', '".$categoryDescription."')";
  if ($conn->query($sql) === TRUE)
  {
    echo "<script>alert('Category added successfully')</script>";
    echo "<script>window.location.replace('./manageCourseCategory.php');</script>";
  }
  else
  {
    echo "<script>alert('Some error occured. Retry again.')</script>";
    echo "<script>window.location.replace('./manageCourseCategory.php');</script>";
  }

}
else
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>