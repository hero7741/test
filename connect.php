<?php
header("Content-type: text/html; charset=utf-8");
	require_once('config.php');
	//����
	if(!($con = mysql_connect(HOST, USERNAME, PASSWORD))){
		echo mysql_error();
	}
	//ѡ��
	if(!mysql_select_db('test')){
		echo mysql_error();
	}
	//�ַ���
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}
?>