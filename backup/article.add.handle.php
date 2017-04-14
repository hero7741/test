
<?php 

require_once("../connect.php");
//print_r($_POST);
if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
	echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
	break;
}
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$content=$_POST['content'];
$dateline=time();
$insertsql="insert into test(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline);";
//$insert=mysql_query($insertsql);
//echo $insertsql;
if(mysql_query($insertsql)){
	echo "<script> alert('发布成功');window.location.href='article.add.php';</script>";}
else
	{echo "<script> alert('发布失败')；window.location.href='article.add.php';</script>";}
?>