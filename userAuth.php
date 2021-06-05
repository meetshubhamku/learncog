<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=1)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
else
{
  $userId = (int)$_REQUEST['user_id'];
  $actionType = $_REQUEST['type'];
  echo $userId;
  echo $actionType;
  include "./db.php";
  if($actionType=='block')
  {
    $sql="update users set is_block=1 where user_id=".$userId;
  }
  else if($actionType=='unblock')
  {
    $sql="update users set is_block=0 where user_id=".$userId;
  }
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Action completed.')</script>";
    echo "<script>window.location.replace('./manageUser.php');</script>";
  } else {
    echo "<script>alert('Some error occured. Please retry later.')</script>";
    echo "<script>window.location.replace('./manageUser.php');</script>";
  }
}
?>
