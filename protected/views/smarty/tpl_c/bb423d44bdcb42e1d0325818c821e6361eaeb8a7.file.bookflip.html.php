<?php /* Smarty version Smarty-3.0.0, created on 2013-04-20 06:47:20
         compiled from "/opt/lhhonline/protected/views/smarty/tpl/bookflip.html" */ ?>
<?php /*%%SmartyHeaderCode:1199638806517239f8a41005-31271795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb423d44bdcb42e1d0325818c821e6361eaeb8a7' => 
    array (
      0 => '/opt/lhhonline/protected/views/smarty/tpl/bookflip.html',
      1 => 1364878439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199638806517239f8a41005-31271795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Bookflip - Coastworx.com</title>
<style>#bookflip{color:#ffffff;}</style>
<script type="text/javascript" src="/bookflip_v4/bookflipjs/bookflip.js"></script>

</script>
</head>
<body>
<div align=center>
	<div>
		<input type=button class="buttons" value=prev onclick="clipmeR();">
		<input type=button class="buttons" value=next onclick="clipmeL();">
		Speed: <input id=speedButton style="width:30px;" value="15" onchange="pSpeed=parseInt(this.value);">
	</div>
	<div id="bookflip"></div>
</div>
	<div id="pages" style="width:1px;height:1px;overflow:hidden;">
		<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('content')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
?>
		<div>
			<img src="<?php echo $_smarty_tpl->getVariable('ctype')->value;?>
/<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['filepath']) ? $_smarty_tpl->tpl_vars['page']->value['filepath'] : null);?>
" width=500 />
		</div>
		<?php }} ?>
	</div>

<script type="text/javascript">
/****************************************************************************
//** Software License Agreement (BSD License)
//** Book Flip slideshow script- Copyright 2011, Will Jones (coastworx.com)
//** This Script is wholly developed and owned by CoastWorx.com
//** Copywrite: http://www.coastworx.com/
//** You are free to use this script so long as this coptwrite notices
//** and link back to http://www.coastworx.com stays intact in its entirety.
//** If you want to remove the link back to http://www.coastworx.com then purchase a licence.
//** You are NOT Permitted to claim this script as your own or
//** use this script for commercial purposes without the express
//** permission of CoastWorx Technologies!
//***************************************************************************/

//pWidth=<?php echo $_smarty_tpl->getVariable('width')->value;?>
; //width of each page
//pHeight=<?php echo $_smarty_tpl->getVariable('height')->value;?>
; //height of each page
pWidth=500; //width of each page
pHeight=500*<?php echo $_smarty_tpl->getVariable('height')->value;?>
/<?php echo $_smarty_tpl->getVariable('width')->value;?>
; //height of each page
numPixels=40;  //size of block in pixels to move each pass
pSpeed=15; //speed of animation, more is slower

startingPage="0";//select page to start from, for last page use "e", eg. startingPage="e"
allowAutoflipFromUrl = true; //true allows querystring in url eg bookflip.html?autoflip=5

pageBackgroundColor="#CCCCCC";
pageFontColor="#ffffff";

pageBorderWidth="1";
pageBorderColor="#3D4D5D";
pageBorderStyle="solid";  //dotted, dashed, solid, double, groove, ridge, inset, outset, dotted solid double dashed, dotted solid

pageShadowLeftImgUrl ="/bookflip_v4/black_gradient.png";
pageShadowWidth = 80;
pageShadowOpacity = 40;
pageShadow=1 //0=shadow off, 1= shadow on left page

allowPageClick=true; //allow page turn by clicking the page directly
allowNavigation=true; //this builds a drop down list of pages for auto navigation.
pageNumberPrefix="page "; //displays in the drop down list of pages if enabled

ini();
</script>
</body>
</html>
