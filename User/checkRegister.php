<?php
include '../php/koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['phoneNumber'];
$conn = connect();
$sql = "INSERT INTO `datauser` (`username`, `email`, `password`, `number`, `confirmEmail`) VALUES ('$username', '$email', '$password', '$number', '0')";
$result = $conn -> query($sql);
if($result)
{
  $_SESSION['username'] = $username;
  header("Location:index.php");
}
else{
  header("Location:register.php?cd=0");
}
