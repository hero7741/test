<?php
require_once("config.php");
//มฌฝำ
if(!($con=mysqli_connect(HOST,USERNAME,PASSWORD,test))){
echo mysql_error();}
//ักฟโ

mysql_query('set names utf8');

?>