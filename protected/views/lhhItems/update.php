<?php
/* @var $this LhhItemsController */
/* @var $model lhhItems */

$this->breadcrumbs=array(
	'Lhh Items'=>array('index'),
	$model->itemid=>array('view','id'=>$model->itemid),
	'Update',
);

$this->menu=array(
	array('label'=>'List lhhItems', 'url'=>array('index')),
	array('label'=>'Create lhhItems', 'url'=>array('create')),
	array('label'=>'View lhhItems', 'url'=>array('view', 'id'=>$model->itemid)),
	array('label'=>'Manage lhhItems', 'url'=>array('admin')),
);
?>

<h1>Update lhhItems <?php echo $model->itemid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>