<?php
header("Content-type: text/html; charset=gbk");


$server = "localhost"; // ��������
$user = "root"; // �û���
$password = "root"; // ����
$dbname = "javaweb"; // ���ݿ���
$table = "shop"; // ���ݱ���
$dianpuming = $_POST['dianpuming'];

@mysql_connect($server, $user, $password) or die("���ݷ���������ʧ�ܣ�"); // �������ݷ�����
@mysql_select_db($dbname) or die("���ݿⲻ���ڻ򲻿��ã�"); // ѡ�����ݿ�




$sql = "SELECT * FROM $table where shop_name='$dianpuming'"; // ׼��SQL��ѯ���
 $result=mysql_query($sql);
$results = array();

	while ($row = mysql_fetch_assoc($result)) {
	$results[] = $row['img'];
	}
	echo json_encode($results);

?>