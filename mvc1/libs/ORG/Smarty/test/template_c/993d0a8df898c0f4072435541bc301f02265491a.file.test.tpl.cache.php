<?php /* Smarty version Smarty-3.1.16, created on 2017-04-09 15:55:17
         compiled from "tpl\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2330058e8a9b1d80ad4-79736154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993d0a8df898c0f4072435541bc301f02265491a' => 
    array (
      0 => 'tpl\\test.tpl',
      1 => 1491724501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2330058e8a9b1d80ad4-79736154',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58e8a9b1de3e03_26183145',
  'variables' => 
  array (
    'arr' => 0,
    'test' => 0,
    'time' => 0,
    'url' => 0,
    'my' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e8a9b1de3e03_26183145')) {function content_58e8a9b1de3e03_26183145($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\phpStudy\\WWW\\mvc1\\libs\\ORG\\Smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\mvc1\\libs\\ORG\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_test')) include 'D:\\phpStudy\\WWW\\mvc1\\libs\\ORG\\Smarty\\plugins\\function.test.php';
?><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['arr']->value['title']);?>
 <?php echo ($_smarty_tpl->tpl_vars['arr']->value['author']).('test');?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>
   <?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value)===null||$tmp==='' ? "no" : $tmp);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%H:%M:%S");?>

<?php echo rawurlencode($_smarty_tpl->tpl_vars['url']->value);?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['my']->value->meth1(array('Æ»¹û','ÊìÁË'));?>

<?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['time']->value);?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>
  <?php echo str_replace('d','j',$_smarty_tpl->tpl_vars['str']->value);?>

<br/>
<?php echo smarty_function_test(array('width'=>150,'height'=>200),$_smarty_tpl);?>
<?php }} ?>
