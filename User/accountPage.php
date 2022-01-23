<?php
  session_start();
  include '../php/koneksi.php';

  $username = $_SESSION['username'];

  $conn = connect();
  $sql = "SELECT * FROM `datauser` WHERE `username` = '$username'";
  $result = $conn -> query($sql);
  $row = $result -> fetch_assoc();
  $username = $row['username'];
  $email = $row['email'];
  $password = $row['password'];
  $number = $row['number'];
  $confirmEmail = $row['confirmEmail'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>MADIWORKS</title>
  <link rel="icon" href="../Img/Logo.png">
  <!-- link -->
  <div class="">
    <link rel="stylesheet" href="../BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/font.css">
    <link rel="stylesheet" type="text/css" href="../CSS/animation.css">
    <link rel="stylesheet" type="text/css" href="../CSS/utility.css">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
  </div>
  <!-- style -->
  <div class="">
    <style>
      @media screen and (max-width: 1250px) {
        .navbar-expand-lg .navbar-collapse {
          font-size: 1.7rem !important;
        }

        .bannerText {
          font-size: 4.5rem;
        }
      }

      @media screen and (max-width: 1092px) {
        .navItemUser {
          margin-left: 40vw !important;
        }
      }

      @media screen and (max-width: 1038px) {
        .bannerText {
          font-size: 4.2rem;
        }
      }

      @media screen and (max-width: 991px) {
        .navItemUser {
          margin-left: 0 !important;
        }
      }

      @media screen and (max-width: 520px) {
        * {
          display: none;
        }
      }

      ::-webkit-scrollbar {
        width: 10px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f1f1;
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
    </style>
  </div>
  <!-- js -->
  <div class="">
    <script type="text/javascript" src="../JQUERY/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../JS/utility.js"></script>
    <script type="text/javascript" src="../JS/index.js"></script>
    <script type="text/javascript" src="../BOOTSTRAP/js/bootstrap.bundle.min.js"></script>
  </div>
</head>
<body id="body">
  <div class="bgfilter">
  </div>
  <div class="backgroundFixed">
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark" style="position:sticky;">
    <div class="container-fluid">
      <a class="navbar-brand" style="width:90px;" href="#"><img class="userImg" src="../Img/Logo.png" style="width:90px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-0 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropd" id="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              OurGame
            </a>
            <ul class="dropdownItemManager" aria-labelledby="navbarDropdown">
              <table class="dropdownTable">
                <tr>
                  <td>
                    <div class="dropdownItem dropdownLeft" id="itemDropdown1">
                      <img src="../Img/Rmmv/Ricon.jpg" class="iconDropdown" alt="">
                      <a href="ancientWar.php">Ancient War</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="dropdownItem dropdownLeft" id="itemDropdown2">
                      <img src="../Img/unity/unityIcon.png" class="iconDropdown" alt="">
                      <a href="candyCatcher.php">Candy Catcher</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="dropdownItem dropdownLeft" id="itemDropdown3">
                      <img src="../Img/android/androidIcon.png" class="iconDropdown" alt="">
                      <a href="#">COMING SOON</a>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="dropdownTable">
                <tr>
                  <td>
                    <div class="contentDropdown" id="contentDropdown1">
                      <a class="dropdownRight textDropDown" id="dropDownText1" style="z-index:100" href="ancientWar.php">Ancient War</a>
                      <img class="dropdownImg" id="dropDownImgOverlay1" style="z-index: 90;opacity:0" src="../Img/home/dropDownBannerOverlay1.png" alt="">
                      <img class="dropdownImg" id="dropdownImg1" src="../Img/home/dropDownBanner1.png" alt="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="contentDropdown" id="contentDropdown2">
                      <a class="dropdownRight textDropDown" id="dropDownText2" style="margin-left: 10px !important;z-index:100;font-family: CANDY, sans-serif;" href="candyCatcher.php">CANDY CATHER</a>
                      <img class="dropdownImg" id="dropDownImgOverlay2" style="z-index: 90;opacity:0;height: 25vw;top: -40px;" src="../Img/home/dropDownBannerOverlay2.png" alt="">
                      <img class="dropdownImg" style="height: 25vw;top: -40px;" id="dropdownImg2" src="../Img/home/dropDownBanner2.png" alt="">
                    </div>
                  </td>
                </tr>
                <td>
                  <div class="contentDropdown" id="contentDropdown3">
                    <a class="dropdownRight textDropDown" id="dropDownText3" style="z-index:100;font-family: Pacifico, sans-serif;font-size:5rem;" href="#">COMING SOON</a>
                    <img class="dropdownImg" id="dropDownImgOverlay3" style="z-index: 90;opacity:0;height: 25vw;top: -40px;" src="../Img/home/dropDownBannerOverlay3.png" alt="">
                    <img class="dropdownImg" id="dropdownImg3" style="height: 25vw;top: -40px;" src="../Img/home/dropDownBanner3.png" alt="">
                  </div>
                </td>
                </tr>
              </table>
            </ul>
          </li>
          <li class="nav-item navItemUser" style="display: flex;align-items:center;">
            <a class="nav-link" href="accountPage.php"tabindex="-1" aria-disabled="true">
              <img src="../Vector/account_circle-white-48dp.svg" class="img" alt="">
              <span style="padding-top:200px;">
                <?php
                  echo substr($_SESSION['username'], 0, 4);
                 ?>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <p></p>
  <main>
    <div class="isiform">
        <br>
        <h1 class="textRegister">MY ACCOUNT</h1>
        <?php
          if (isset($_GET['cd'])) {
              if ($_GET['cd'] == 0) {
                  echo "<h1 style=\"font-size:1rem;color:red;\">Data Gagal Diubah!</h1>";
              } elseif ($_GET['cd'] == 1) {
                  echo "<h1 style=\"font-size:1rem;color:green;\">Data Berhasil Diubah!</h1>";
              }
          }
         ?>
        <br>
        <label for="">Username : </label><br>
        <label for=""><?php echo $username; ?></label>
        <br>
        <br>
        <label for="">Email :</label><br>
        <label for=""><?php echo $email; ?></label>
        <br>
        <br>
        <label for="">Password :</label><br>
        <label for=""><?php echo $password; ?></label>
        <br>
        <br>
        <label for="">Phone Number :</label><br>
        <label for=""><?php echo $number; ?></label>
        <br>
        <br>
        <label for="">Confirmation Status : </label><br>
        <label for=""><?php echo($confirmEmail ? "Terkonfirmasi!" : "Tidak Terkonfirmasi"); ?></label>
        <br>
        <br>
        <a href="changeData.php"><button class="button" type="button" name="button">Change Data</button></a>
        <a href="../php/logout.php"><button class="button" type="button" name="button">Log Out</button></a>
    </div>
    <br>
    <br>
    <br>
  </main>
</body>
</html>
