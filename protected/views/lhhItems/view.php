<?php
/* @var $this LhhItemsController */
/* @var $model lhhItems */

$this->breadcrumbs=array(
	'Lhh Items'=>array('index'),
	$model->itemid,
);

$this->menu=array(
	array('label'=>'List lhhItems', 'url'=>array('index')),
	array('label'=>'Create lhhItems', 'url'=>array('create')),
	array('label'=>'Update lhhItems', 'url'=>array('update', 'id'=>$model->itemid)),
	array('label'=>'Delete lhhItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->itemid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage lhhItems', 'url'=>array('admin')),
);
?>

<h1>View lhhItems #<?php echo $model->itemid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'itemid',
		'catid',
		'uid',
		'tid',
		'username',
		'itemtypeid',
		'type',
		'subtype',
		'subject',
		'dateline',
		'lastpost',
		'viewnum',
		'replynum',
		'digest',
		'top',
		'allowreply',
		'hash',
		'haveattach',
		'grade',
		'gid',
		'gdigest',
		'password',
		'styletitle',
		'picid',
		'fromtype',
		'fromid',
		'hot',
		'click_1',
		'click_2',
		'click_3',
		'click_4',
		'click_5',
		'click_6',
		'click_7',
		'click_8',
		'click_9',
		'click_10',
		'click_11',
		'click_12',
		'click_13',
		'click_14',
		'click_15',
		'click_16',
		'click_17',
		'click_18',
		'click_19',
		'click_20',
		'click_21',
		'click_22',
		'click_23',
		'click_24',
		'click_25',
		'click_26',
		'click_27',
		'click_28',
		'click_29',
		'click_30',
		'click_31',
		'click_32',
	),
)); ?>
