<?php

$serverName = "localhost";
$dBUsername = "epiz_27360402";
$dBPassword = "1Procode";
$dBName = "epiz_27360402_ProgramBlackWebDataBase";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}