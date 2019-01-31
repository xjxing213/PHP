<?php
// 修改代码后，执行会有延迟
$servername = "sqld-gz.bcehost.com";
$username = "";
$password = "";
$dbname = "";

$con = mysql_connect($servername,$username,$password ,$dbname ) or die('error:'.mysql_error());
mysql_query('set NAMES utf8');
// -----------插入数据
 // $sql = "INSERT INTO `TABLE 2`(银行, 支行, name) VALUES ('农信', 'HJ支行', 'xiu')";
// $sql= mysql_query("INSERT INTO `TABLE 3`(银行, 支行, name) VALUES ('农信', 'HJ支行', 'xiu')");
 // if ($sql == TRUE) { 
	// echo "user entry saved successfully."; 
 // } else { echo "INSERT attempt failed" ; 
 // }
 // $con->close();
 // -----------删除数据
// mysql_query("delete from `TABLE 2` where name='zhi2'");
 // $con->close(); 
 // -----------更新数据
// mysql_query("update `TABLE 2` set 银行='建设银行' where name='zixuan'");
 // $con->close(); 
//-----------查询数据
// $result=mysql_query("select * from `TABLE 2`");
// while($row=mysql_fetch_array($result)){
// echo $row["银行"]."---".$row["支行"]."---".$row["name"];
// echo "<br>";
// }
 // $con->close(); 
// ------------备用
 // if ($con->query($sql) == TRUE) { 
	// echo "user entry saved successfully."; 
 // } else { echo "INSERT attempt failed" ; 
 // }
?>
