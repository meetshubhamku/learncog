<?php

if($_SERVER['SERVER_NAME']=="localhost"){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e_learning";
}
else{
  $servername = "sql105.epizy.com";
  $username = "epiz_28810494";
  $password = "0zemRrNavuK";
  $dbname = "epiz_28810494_learncog";
}

$sql="";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>