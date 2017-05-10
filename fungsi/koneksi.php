<?php 
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'bangku';

$kon = new mysqli_connect($host, $username, $pass, $db);

if($kon){
	echo "berhasil";
}

 ?>
