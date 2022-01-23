<?php
include '../php/koneksi.php';
$conn = connect();
if (isset($_GET['data'])) {
    $id = $_GET['data'];
}
  echo $id;
  $stat = connect();
  $sql = "SELECT * FROM `candy` WHERE `Id` = '$id'";
  $result = $conn -> query($sql);
  $row = $result -> fetch_assoc();
  $file = '../admin/uploaded/'.$row['fileName'].".exe";
  echo $file;
  if (file_exists($file)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename='.basename($file));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: private');
      header('Pragma: private');
      header('Content-Length: ' . filesize($file));
      ob_clean();
      flush();
      readfile($file);
      exit;
      header("Location:ancientWar.php");
  }
