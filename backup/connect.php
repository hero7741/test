<?php
require_once("config.php");
//����
if(!($con=mysqli_connect(HOST,USERNAME,PASSWORD,test))){
echo mysql_error();}
//ѡ��

mysql_query('set names utf8');

?>