<?php
include '../php/koneksi.php';
$conn = connect();
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
  <div class="container" id="containerContent">
    <h1 style="text-decoration:underline;">Admin Panel</h1>
  </div>
  <br>
  <br>
  <div class="container">
    <h1 style="text-decoration:underline;">Admin Account</h1>
    <table border="2" style="width:60%;">
      <?php
      $dataAdmin = "SELECT * FROM `dataadmin`";
      $result = $conn -> query($dataAdmin);
      if ($result -> num_rows > 0) {
          $row = $result -> fetch_assoc()
        ?>
        <tr>
          <td>
            <h1><?php echo "nama : "; ?></h1>
          </td>
          <td>
            <h1><?php echo $row['username'] ?></h1>
          </td>
        </tr>
        <tr>
          <td>
            <h1><?php echo "password : "; ?></h1>
          </td>
          <td>
            <h1><?php echo $row['password'] ?></h1>
          </td>
        </tr>
        <?php
      } else {
          echo "<label>Data Kosong...</label>";
      }
      ?>
    </table><br>
  </div>
  <div class="container">
    <h1 style="text-decoration:underline;">Player Account</h1>
    <table border="2" style="width:100%;">
      <tr>
        <th>
          <h2>USERNAME</h2>
        </th>
        <th>
          <h2>EMAIL</h2>
        </th>
        <th>
          <h2>PASSWORD</h2>
        </th>
        <th>
          <h2>CONFIRM</h2>
        </th>
        <th>
          <h2>NUMBER</h2>
        </th>
        <th>
          <h2>ACTION</h2>
        </th>
      </tr>
      <?php
        $dataUser = "SELECT * FROM `datauser`";
        $result = $conn -> query($dataUser);
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                ?>
            <tr>
              <td>
                <h5><?php echo $row['username']; ?></h5>
              </td>
              <td>
                <h5><?php echo $row['email']; ?></h5>
              </td>
              <td>
                <h5><?php echo $row['password']; ?></h5>
              </td>
              <td>
                <h5><?php echo $row['confirmEmail']; ?></h5>
              </td>
              <td>
                <h5><?php echo $row['number']; ?></h5>
              </td>
              <td>
                <a href="hapusUser.php?usId=<?php echo $row['username']; ?>" style="color:black;">Hapus</a>
              </td>
            </tr>
            <?php
            }
        } else {
            echo "<label>Data Kosong...</label>";
        }
       ?>
    </table><br>
  </div>
</body>
</html>
