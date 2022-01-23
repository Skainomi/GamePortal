<?php

function connect($namaDB = "maidworks_gameportal", $host = "localhost", $user = "root", $pass = "")
{
    $conn = mysqli_connect($host, $user, $pass, $namaDB);
    if (!$conn) {
        header("Location:databaseError.php");
    }
    return $conn;
}
