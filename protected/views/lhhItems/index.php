<?php
/* @var $this LhhItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lhh Items',
);

$this->menu=array(
	array('label'=>'Create lhhItems', 'url'=>array('create')),
	array('label'=>'Manage lhhItems', 'url'=>array('admin')),
);
?>

<h1>Lhh Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
