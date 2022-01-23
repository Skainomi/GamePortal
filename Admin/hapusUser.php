<?php

include '../php/koneksi.php';
$conn = connect();
$Id = $_GET['usId'];
$dataUser = "DELETE FROM `datauser` WHERE `username` = '$Id'";
$result = $conn -> query($dataUser);
if ($result) {
    header("Location:index.php?cd=2");
} else {
    header("Location:index.php?cd=3");
}
