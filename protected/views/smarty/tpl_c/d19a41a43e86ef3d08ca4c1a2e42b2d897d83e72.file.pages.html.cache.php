<?php /* Smarty version Smarty-3.0.0, created on 2013-04-01 10:39:55
         compiled from "D:\www\lhhonline\protected\views\smarty\tpl\reader/xml/pages.html" */ ?>
<?php /*%%SmartyHeaderCode:2716751594668c85217-95813600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19a41a43e86ef3d08ca4c1a2e42b2d897d83e72' => 
    array (
      0 => 'D:\\www\\lhhonline\\protected\\views\\smarty\\tpl\\reader/xml/pages.html',
      1 => 1364805592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2716751594668c85217-95813600',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<content width="865" height="730" bgcolor="cccccc" loadercolor="ffffff" panelcolor="5d5d61" buttoncolor="5d5d61" textcolor="ffffff">
<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('content')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
?>
    <page src="attachments/<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['filepath']) ? $_smarty_tpl->tpl_vars['page']->value['filepath'] : null);?>
"/>
<?php }} ?>

</content>