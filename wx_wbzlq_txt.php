<?php
$dt=$_POST["pdt"];
$txt=$_POST["ptxt"];
$id=$_POST["pid"];

$servername = "sqld-gz.bcehost.com";
$username = "";
$password = "";
$dbname = "OAqWfbQqLQgbqaUYxcSl";
$con = mysql_connect($servername,$username,$password ,$dbname ) or die('error:'.mysql_error());
mysql_query('set NAMES utf8');
// -----------插入数据
$sql="INSERT INTO `wx_wbzlq_text`(date, text,id) VALUES (\"".$dt."\",\"". $txt."\",\"". $id."\")";
// echo $sql
 if (mysql_query($sql) == TRUE) { 
	echo "user entry saved successfully."; 
 } else { echo "INSERT attempt failed" ; 
 }
 $con->close();
 
?>
