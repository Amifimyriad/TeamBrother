<?php

$server = "127.0.0.1";
$user = "epiz_29157152_flowweb";
$password = "";
$db = "epiz_29157152_Flowweb";
$con = mysqli_connect($server,$user,$password,$db);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
