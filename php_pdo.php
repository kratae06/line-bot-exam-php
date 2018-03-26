<?php

	$HOST_NAME = "127.0.0.1";
	$DB_NAME = "php_pdo";
	$CHAR_SET = "charset=utf8"; // เช็ตให้อ่านภาษาไทยได้

	$USERNAME = "root";     // ตั้งค่าตามการใช้งานจริง
	$PASSWORD = "smit001";  // ตั้งค่าตามการใช้งานจริง


	try {
	
		$db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
	
		echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
	
	
	} catch (PDOException $e) {
	
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : ".$e->getMessage();
	
	}
 
?>
