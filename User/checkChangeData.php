<?php
include '../php/koneksi.php';

$conn = connect();
session_start();
$username = $_POST['username'];

$sql = "SELECT * FROM `datauser` WHERE `username` = '$username'";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
if($row)
{
  $usernameData = $row['username'];
  $passwordData = $row['password'];
  $emailData = $row['email'];
  $numberData = $row['number'];
}
$password = (($_POST['password'] == "") ? $passwordData : $_POST['password']);
$email = (($_POST['email'] == "") ? $emailData : $_POST['email']);
$number = (($_POST['phoneNumber'] == "") ? $numberData : $_POST['phoneNumber']);

$sql = "UPDATE
`datauser`
SET
`email` = '$email',
`password` = '$password',
`number` = '$number'
WHERE
`datauser`.`username` = '$username'";
if ($conn -> query($sql)) {
    header("Location:accountPage.php?cd=1");
} else {
    header("Location:accountPage.php?cd=0");
}
