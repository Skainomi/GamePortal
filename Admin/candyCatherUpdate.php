<?php

include '../php/koneksi.php';

$conn = connect();
session_start();
$dataUpdate = $_POST['dataUpdate'];
$date = $_POST['date'];
$name = $_POST['nama'];
$file = rand(1000, 10000)."-".$_FILES['file']['name'];
$tempFile = $_FILES['file']['tmp_name'];
$upDir = "uploaded";
$upload = move_uploaded_file($tempFile, $upDir."/".$file);
$sql = "INSERT INTO `candy` (`Id`, `dataupdate`, `date`, `file`, `fileName`)
VALUES (NULL, '$dataUpdate', '$date','$file','$name')";
if ($conn -> query($sql)) {
    header("Location:index.php?cd=1");
} else {
    header("Location:index.php?cd=0");
}
