<?php

$db_host="sql205.epizy.com";
$user="epiz_29157152";
$pass="82Z9KhsgDDDNU";
$db_name="epiz_29157152_Flowweb";
// $db_port="3306";
$conn = new mysqli($db_host,$user,$pass,$db_name);
if($conn->connect_error){
	die("Failed");
}
// else{
// 	echo "Connect";
// }
  

  ?>
