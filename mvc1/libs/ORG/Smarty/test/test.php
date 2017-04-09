<?php
require ('../Smarty.class.php');
$smarty=new Smarty();
//配置
$smarty->left_delimiter="{";
$smarty->right_delimiter="}";
$smarty->template_dir="tpl";
$smarty->compile_dir="template_c";
$smarty->cache_dir="cache";
$smarty->caching= true;
$smarty->cache_lifetime=120;

//实验
$smarty->assign('articletitle','title');
// $smarty->display('test.tpl');
$arr=array('title'=>'study' ,'author'=>'xiaming');
$smarty->assign('arr',$arr);
$smarty->assign('time', time());
$smarty->assign('url','http://www.imooc.com/video/1059');
class myobject {
    function meth1($param){
        return $param[0].'已经'.$param[1];
    }
}
$my=new myobject();
$smarty->assign('my',$my);
$smarty->assign('str','asdfgh');

$smarty->display('test.tpl');
