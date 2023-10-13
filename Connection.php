<?php 

$con=mysqli_connect("localhost","root","","signup");

if(mysqli_connect_error()){
  echo"Cannot connect to database";
  exit();
}

?>