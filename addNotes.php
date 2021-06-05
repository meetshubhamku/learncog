<?php

if(isset($_POST['addNotes']))
{
  $notesTitle=trim($_POST['notesTitle']);
  $notesDescription=trim($_POST['notesDescription']);
  $notesLink=trim($_POST['notesLink']);
  $notesCategory=$_POST['courseCategory'];

  include "./db.php";
  $sql = "insert into notes (note_title, note_link, note_description, note_category) values ('".$notesTitle."', '".$notesLink."', '".$notesDescription."', ".$notesCategory.")";
  if ($conn->query($sql) === TRUE)
  {
    echo "<script>alert('Notes added successfully')</script>";
    echo "<script>window.location.replace('./manageNotes.php');</script>";
  }
  else
  {
    echo "<script>alert('Some error occured. Retry again.')</script>";
    echo "<script>window.location.replace('./manageNotes.php');</script>";
  }

}
else
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>