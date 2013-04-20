<?php
/* @var $this LhhItemsController */
/* @var $model lhhItems */

$this->breadcrumbs=array(
	'Lhh Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List lhhItems', 'url'=>array('index')),
	array('label'=>'Manage lhhItems', 'url'=>array('admin')),
);
?>

<h1>Create lhhItems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>