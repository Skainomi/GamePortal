<?php
session_start();
if (isset($_SESSION['usernameAdmin'])) {
    $login = true;
} else {
    header("Location:adminLogin.php");
    $login = false;
}
  if (isset($_GET['cd'])) {
      if ($_GET['cd'] == 0) {
          echo "<script type='text/javascript'>alert('data gagal diupdate!');</script>";
      } elseif ($_GET['cd'] == 1) {
          echo "<script type='text/javascript'>alert('data berhasil diupdate');</script>";
      } elseif ($_GET['cd'] == 2) {
          echo "<script type='text/javascript'>alert('data berhasil dihapus');</script>";
      } elseif ($_GET['cd'] == 3) {
          echo "<script type='text/javascript'>alert('data gagal dihapus');</script>";
      }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>MADIWORKS ADMIN</title>
  <link rel="icon" href="../Img/Logo.png">
  <!-- link -->
  <div class="">
    <link rel="stylesheet" href="../BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/font.css">
    <link rel="stylesheet" type="text/css" href="../CSS/animation.css">
    <link rel="stylesheet" type="text/css" href="../CSS/utility.css">
    <link rel="stylesheet" type="text/css" href="../CSS/admin.css">
  </div>
  <!-- style -->
  <div class="">

  </div>
  <!-- js -->
  <div class="">
    <script type="text/javascript" src="../JQUERY/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../JS/utility.js"></script>
    <script type="text/javascript" src="../JS/admin.js"></script>
    <script type="text/javascript" src="../BOOTSTRAP/js/bootstrap.bundle.min.js"></script>
  </div>
</head>
<body style="background:white">
  <div class="container bg-dark" style="width:20%;float:left;height:100%;position:fixed;">
    <h1 style="color:white;width:100%;text-align:center;cursor:default;">ADMIN</h1>
    <br>
    <br>
    <h1 id="aw" style="color:white;width:100%;text-align:center;cursor:pointer;">Ancient War</h1>
    <br>
    <br>
    <h1 id="cc" style="color:white;width:100%;text-align:center;cursor:pointer;">Candy Cather</h1>
    <br>
    <br>
    <h1 id="panel" style="color:white;width:100%;text-align:center;cursor:pointer;">Admin Panel</h1>
    <br>
    <br>
    <a href="logout.php"><button style="color:black;width:100%;text-align:center;" type="button" name="button">Log Out</button></a>
  </div>
  <div class="container" id="containerContent" style="width:80%;margin-left:20%;">
  </div>
</body>
</html>
