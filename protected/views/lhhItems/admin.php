<?php
/* @var $this LhhItemsController */
/* @var $model lhhItems */

$this->breadcrumbs=array(
	'Lhh Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List lhhItems', 'url'=>array('index')),
	array('label'=>'Create lhhItems', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lhh-items-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lhh Items</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lhh-items-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'itemid',
		'catid',
		'uid',
		'tid',
		'username',
		'itemtypeid',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
