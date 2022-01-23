<?php
session_start();
if (isset($_SESSION['usernameAdmin'])) {
    $login = true;
} else {
      $login = false;
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
    <script type="text/javascript" src="../JS/index.js"></script>
    <script type="text/javascript" src="../BOOTSTRAP/js/bootstrap.bundle.min.js"></script>
  </div>
</head>
<body style="background:white">
  <div class="isiform" style="margin:100px auto !important;">
    <form style="margin-top:auto auto !important;position:relative;" action="checkAdminLogin.php" method="post">
      <br>
      <h1 class="textRegister">LOGIN</h1>
      <?php
        if (isset($_GET['cd'])) {
            if ($_GET['cd'] == 0) {
                echo "<h1 style=\"font-size:1rem;color:red;\">Username/Password Salah</h1>";
            }
        }
       ?>
      <br>
      <label for="">Username : </label><br>
      <input class="inputText" type="text" id="" name="username" required value="">
      <br>
      <br>
      <label for="">Password :</label><br>
      <input class="inputText" type="password" id="" name="password" required value="">
      <br>
      <br>
      <input class="button" style="padding:3px 8.8vw;color:white !important;" onclick="" type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
