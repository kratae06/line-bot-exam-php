<?
	$hostName="127.0.0.1";
	$user="root";
	$dbName="php_pdo";
	$connect= mysqli_connect($hostName,$user,$dbName) or die("ไม่สามารถเชิ่อมต่อฐานข้อมูลได้");
	echo "ติดต่อฐานข้อมูลเรียบร้อย";
?>
