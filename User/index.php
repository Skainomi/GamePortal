<?php
session_start();
if(isset($_SESSION['username']))
  $login = true;
  else {
    $login = false;
  }
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
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">
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
          <?php

           ?>
          <li class="nav-item navItemUser" style="display: flex;align-items:center;">
            <a class="nav-link" href=<?php echo ($login ? "accountPage.php" : "register.php"); ?> tabindex="-1" aria-disabled="true">
              <img src="../Vector/account_circle-white-48dp.svg" class="img" alt="">
              <span style="padding-top:200px;">
                <?php
                  echo ($login ? substr($_SESSION['username'],0,4) : "User");
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
    <div class="frontBanner">
      <div class="backgroundCoverBlackBanner backgroundCoverBlack">
      </div>
      <img class="bannerImg" style="position:relative;" src="../Img/home/B1.png" alt="">
      <p class="bannerText" id="frontBannerText" style="font-family: GAME, sans-serif;">
        Failed To Load Text, Please Refresh!
      </p>
      <?php
        if(!$login)
          echo "<a href=\"register.php\"><button class=\"frontBannerButton\" type=\"button\" name=\"button\">START</button></a>";
       ?>
    </div>
    <div class="backgroundCoverBlack backgroundCoverBlackGameText" style="top:700px;z-index:200;">
    </div>

    <div class="gameBanner">
      <div id="gameBanner">
        <div class="backgroundCoverBlack backgroundCoverBlackGame" >
        </div>
        <p class="gameBannerText">|\| Our Games |/|</p>
      </div>
      <div class="isiGameBanner" id="isiGameBanner">
        <!-- <img class="bannerImgActor" id="actorr1" src="../Img/Rmmv/bannerActor1.png" alt="" style="opacity: 1;z-index:100;top:-50px;">
        <img class="bannerImgActor" id="actorr2" src="../Img/Rmmv/bannerActor2.png" alt="" style="opacity: 1;z-index:100;top:-50px;">
        <img class="bannerImgActor" id="actorr3" src="../Img/Rmmv/bannerActor3.png" alt="" style="opacity: 1;z-index:100;top:-50px;">
        <img class="bannerImgEnemy" id="enemyr1" src="../Img/Rmmv/bannerEnemy2.png" alt="" style="opacity: 1;z-index:100;top:-50px;"> -->
        <h1 class="gameBannerName" id="gameBannerName1">ANCIENT WAR</h1>
        <img class="gameBannerImg" id="gameBannerGambar1" src="../Img/Rmmv/Mv.png" alt="">
      </div>
      <div class="isiGameBanner" style="top: 232px;" id="isiGameBanner">
        <!-- <img class="bannerImgActor candy" src="../Img/unity/candy.png" alt="" style="opacity: 1;z-index:100;top:-50px;">
        <img class="bannerImgActor candy" src="../Img/unity/candy.png" alt="" style="opacity: 1;z-index:100;top:-50px;">
        <img class="bannerImgActor candy" src="../Img/unity/candy.png" alt="" style="opacity: 1;z-index:100;top:-50px;">
        <img class="bannerImgCandy candy" src="../Img/unity/candy.png" alt="" style="opacity: 1;z-index:100;top:-50px;">-->
        <h1 class="gameBannerName" id="gameBannerName2">CANDY CATHER</h1>
        <img class="gameBannerImg" id="gameBannerGambar2" src="../Img/unity/unity.png" alt="">
      </div>
      <div class="isiGameBanner" id="game1" style="background: rgb(0,0,0,0);z-index:3;">
      </div>
      <div class="isiGameBanner" id="game2" style="background: rgb(0,0,0,0);top: 226px;z-index:3;">
      </div>
    </div>
    <div class="topUpBanner">
      <img class="bannerImgActor" id="actor1" src="../Img/home/bannerActor1.png" alt="">
      <img class="bannerImgActor" id="actor2" src="../Img/home/bannerActor2.png" alt="">
      <img class="bannerImgActor" id="actor3" src="../Img/home/bannerActor3.png" alt="">
      <img class="bannerImgEnemy" id="enemy1" src="../Img/home/bannerEnemy2.png" alt="">
      <img class="bannerImgEnemy" id="enemy2" src="../Img/home/bannerEnemy2.png" alt="">
      <img class="bannerImgEnemy" id="enemy3" src="../Img/home/bannerEnemy2.png" alt="">
      <h1 class="text">Top Up dan Dapatkan<br>Keuntunganya!</h1>
      <h1 class="text pointerTopUp" style="left:33%;">-></h1>
      <div class="colider" id="topUp">
      </div>
      <h1 class="text" style="top:300px;text-decoration:underline;">Top Up Sekarang!</h1>
      <h1 class="text pointerTopUp" style="left:99%;width:300px;">
        <- </h1>
    </div>
    <div class="lastBanner">
      <img src="../Img/home/Enjoy.jpg" style="width:100%;height:100%;" alt="">
      <h1 class="lastBannerText">ENJOY!</h1>
    </div>

  </main>
</body>
<footer class="container-fluid bg-dark" style="width:100%;height:content;">
  <div class="bg-dark" style="text-align:center;padding-bottom:20px;text-align: left;">
    
  </div>
</footer>
</html>
