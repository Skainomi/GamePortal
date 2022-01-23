<?php

include '../php/koneksi.php';

$conn = connect();
session_start();
$dataUpdate = $_POST['dataUpdate'];
$date = $_POST['date'];
$file = $_POST['nama'].$_FILES['name'].".exe";
$name = $_POST['nama'];
$tempFile = $_FILES['file']['tmp_name'];
$upDir = "uploaded";
$upload = move_uploaded_file($tempFile, $upDir."/".$file);
$sql = "INSERT INTO `ancientwar` (`Id`, `dataupdate`, `date`, `file`, `fileName`)
VALUES (NULL, '$dataUpdate', '$date','$file','$name')";
if($conn -> query($sql))
{
  echo "string";
  header("Location:index.php?cd=1");
}
else
{
  header("Location:index.php?cd=0");
}
 ?>
