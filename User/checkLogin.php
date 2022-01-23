<?php

include '../php/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$conn = connect();
$sql = "SELECT * FROM `datauser` WHERE `username` = '$username' && `password` = '$password'";
$result = $conn -> query($sql);

if($result -> num_rows > 0)
{
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['loginStatus'] = true;
  header("Location:index.php");
}
else {
  header("Location:login.php?cd=0");
}
 ?>
