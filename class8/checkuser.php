<?php
session_start(); //เรยี กฟังกช์ นั่ session_start() เพอื่ เรมิ่ ใชง้ําน session
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$hostname = "localhost";
$username = "root";
$password = "mysql2012";
$dbname = "test";
$conn = mysql_connect( $hostname, $username, $password );
if ( ! $conn ) die ( "ไม่สํามํารถติดต่อกับ MySQL ได ้");
mysql_select_db ( $dbname, $conn )or die ( "ไม่สํามํารถเลือกฐํานข ้อมูล test ได ้" );
$sqltxt = "SELECT * FROM login where UserName = '$UserName'";
$result = mysql_query ( $sqltxt, $conn );
$rs = mysql_fetch_array ( $result );
if ( $rs ) // พบ Username
{
if ($rs['Password'] == $Password) { Password ตรงกัน
session_register("UserName");
header("Location: welcome.php?UserName=$UserName");
}
else {
echo "<br>Password not match.";
echo "<br><a href='login.php'>คลิก กลับไปเพื่อ login </a>";
}
}
else {
echo "Not found UserName " . $UserName;
echo "<br><a href='login.php'>คลิก กลับไปเพื่อ login </a>";
}
?>