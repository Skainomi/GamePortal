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
<body style="background:white" id="body">
  <div class="container" id="containerContent">
    <h1 style="text-decoration:underline;">Candy Cather Panel</h1><br>
    <div class="container content">
      <!-- <h1>Total User : 50</h1> -->
    </div>
    <br>
    <br>
    <div class="isiform">
      <form style="" action="candyCatherUpdate.php" method="post">
        <h1 class="textRegister">Game Update</h1>
        <?php
        if (isset($_GET['cd'])) {
            if ($_GET['cd'] == 0) {
                echo "<h1 style=\"font-size:1rem;color:red;\">Registrasi Gagal, silahkan mencoba kembali!</h1>";
            }
        } ?>
        <label for="">Nama : </label><br>
        <textarea style="height:50px;" rows="2" cols="25" class="inputText" type="text" id="" name="nama" required value=""></textarea>
        <br>
        <br>
        <label for="">Update : </label><br>
        <textarea style="height:50px;" rows="2" cols="25" class="inputText" type="text" id="" name="dataUpdate" required value=""></textarea>
        <br>
        <br>
        <label for="">Date : </label><br>
        <input class="inputText" type="text" id="" name="date" required value="">
        <br>
        <br>
        <label for="">Game Files : </label><br>
        <input class="inputText" type="file" id="" name="file" required value="">
        <br>
        <br>
        <input class="button" style="color:white !important;padding:3px 8.8vw;margin-top:20px" onclick="" type="submit" value="Submit">
      </form>
    </div>
    <br>
    <br>
  </div>
</body>
</html>
