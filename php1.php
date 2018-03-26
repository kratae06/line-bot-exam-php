<?php
	$hostName="localhost";
	$user="root";
	$pass="";
	$dbName="php_pdo";
	$connect= mysqli_connect($hostName,$user,$pass,$dbName) or die("ไม่สามารถเชิ่อมต่อฐานข้อมูลได้");
	echo "ติดต่อฐานข้อมูลเรียบร้อย";
?>
