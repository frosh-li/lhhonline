<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet/less" type="text/css" href="css/less/veryless.less">
	<link rel="stylesheet/less" type="text/css" href="css/less/styles.less">
	<script src="css/less/less.js" type="text/javascript"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="page">
	<div class="header container">
		<div id="logo">
		</div>
	</div><!-- header -->
	<div id="mainmenu">
		<ul class="clearfix">
			<li class="d-logo"><a href="#"></a></li>
			<li><a href="index.php?r=collection" class="">连环画阅览室</a></li>
			<li><a href="index.php?r=compCollection" class="">综合阅览室</a></li>
			<li><a href="index.php?r=celebrity" class="">民家风采</a></li>
			<li><a href="index.php?r=encyclopedia" class="">连环画百科</a></li>
		</ul>
	</div><!-- mainmenu -->
	<div  class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	</div>
	<div id="maindoc">
		<?php echo $content; ?>
	</div>

	<div id="footer" class="container">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
