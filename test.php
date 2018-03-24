<?php
$host = "localhost"; // ชื่อ host หรือ ip ที่ใช้
$userhost = "id4993088_tae06122539"; // ชื่อ user ที่ใช้ในการล็อกอิน
$passhost = "id4993088_pranee"; // password ที่ใช้ในการล็อกอิน
$database = "krataepraneecsc235"; // ชื่อ Database
$conn = mysql_connect($host,$userhost,$passhost);
if(!$conn){
echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
}
mysql_query("use $data2"); // เลือกฐานข้อมูลที่ใช้
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

$query = "select * from news_picture";
$data = mysql_query($query); //query ข้อมูล
while($show = mysql_fetch_array($data)){
echo $show[0]." ".$show[1]." ".$show[2]."
"; // โชว์ข้อมูล
}
?>
