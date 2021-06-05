<?php
if(isset($_POST['updatecoursecategory']))
{
  $categoryId=(int)$_POST['categoryId'];
  $categoryName=trim(strtoupper($_POST['categoryName']));
  $categoryDescription=trim($_POST['categoryDescription']);

  include "./db.php";
  
  
  if($categoryDescription=="")
  {
    $sql = "update course_category set course_name='".$categoryName."' where course_id=".$categoryId;
  }
  else
  {
    $sql = "update course_category set course_name='".$categoryName."', course_description='".$categoryDescription."' where course_id=".$categoryId;
  }


  if ($conn->query($sql) === TRUE)
  {
    echo "<script>alert('Category updated successfully')</script>";
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