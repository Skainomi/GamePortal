<?php

include '../php/koneksi.php';

$conn = connect();
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `dataadmin` WHERE `username` = '$username' && `password` = '$password'";
$result = $conn -> query($sql);
if ($result -> num_rows > 0) {
    $_SESSION['usernameAdmin'] = $username;
    $_SESSION['passwordAdmin'] = $password;
    header("Location:index.php");
} else {
    header("Location:adminLogin.php?cd=0");
}
