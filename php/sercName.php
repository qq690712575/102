<?php
header("Content-type: text/html; charset=gbk");


$server = "localhost"; // 服务器名
$user = "root"; // 用户名
$password = "root"; // 密码
$dbname = "javaweb"; // 数据库名
$table = "shop"; // 数据表名
$dianpuming = $_POST['dianpuming'];

@mysql_connect($server, $user, $password) or die("数据服务器连接失败！"); // 连接数据服务器
@mysql_select_db($dbname) or die("数据库不存在或不可用！"); // 选择数据库




$sql = "SELECT * FROM $table where shop_name='$dianpuming'"; // 准备SQL查询语句
 $result=mysql_query($sql);
$results = array();

	while ($row = mysql_fetch_assoc($result)) {
	$results[] = $row['img'];
	}
	echo json_encode($results);

?>