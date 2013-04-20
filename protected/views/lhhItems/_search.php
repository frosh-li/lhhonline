<?php
/* @var $this LhhItemsController */
/* @var $model lhhItems */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'itemid'); ?>
		<?php echo $form->textField($model,'itemid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catid'); ?>
		<?php echo $form->textField($model,'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tid'); ?>
		<?php echo $form->textField($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemtypeid'); ?>
		<?php echo $form->textField($model,'itemtypeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtype'); ?>
		<?php echo $form->textField($model,'subtype',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastpost'); ?>
		<?php echo $form->textField($model,'lastpost',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewnum'); ?>
		<?php echo $form->textField($model,'viewnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'replynum'); ?>
		<?php echo $form->textField($model,'replynum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'digest'); ?>
		<?php echo $form->textField($model,'digest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'top'); ?>
		<?php echo $form->textField($model,'top'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allowreply'); ?>
		<?php echo $form->textField($model,'allowreply'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hash'); ?>
		<?php echo $form->textField($model,'hash',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'haveattach'); ?>
		<?php echo $form->textField($model,'haveattach'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade'); ?>
		<?php echo $form->textField($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gid'); ?>
		<?php echo $form->textField($model,'gid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gdigest'); ?>
		<?php echo $form->textField($model,'gdigest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'styletitle'); ?>
		<?php echo $form->textField($model,'styletitle',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'picid'); ?>
		<?php echo $form->textField($model,'picid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fromtype'); ?>
		<?php echo $form->textField($model,'fromtype',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fromid'); ?>
		<?php echo $form->textField($model,'fromid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_1'); ?>
		<?php echo $form->textField($model,'click_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_2'); ?>
		<?php echo $form->textField($model,'click_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_3'); ?>
		<?php echo $form->textField($model,'click_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_4'); ?>
		<?php echo $form->textField($model,'click_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_5'); ?>
		<?php echo $form->textField($model,'click_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_6'); ?>
		<?php echo $form->textField($model,'click_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_7'); ?>
		<?php echo $form->textField($model,'click_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_8'); ?>
		<?php echo $form->textField($model,'click_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_9'); ?>
		<?php echo $form->textField($model,'click_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_10'); ?>
		<?php echo $form->textField($model,'click_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_11'); ?>
		<?php echo $form->textField($model,'click_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_12'); ?>
		<?php echo $form->textField($model,'click_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_13'); ?>
		<?php echo $form->textField($model,'click_13'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_14'); ?>
		<?php echo $form->textField($model,'click_14'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_15'); ?>
		<?php echo $form->textField($model,'click_15'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_16'); ?>
		<?php echo $form->textField($model,'click_16'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_17'); ?>
		<?php echo $form->textField($model,'click_17'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_18'); ?>
		<?php echo $form->textField($model,'click_18'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_19'); ?>
		<?php echo $form->textField($model,'click_19'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_20'); ?>
		<?php echo $form->textField($model,'click_20'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_21'); ?>
		<?php echo $form->textField($model,'click_21'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_22'); ?>
		<?php echo $form->textField($model,'click_22'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_23'); ?>
		<?php echo $form->textField($model,'click_23'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_24'); ?>
		<?php echo $form->textField($model,'click_24'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_25'); ?>
		<?php echo $form->textField($model,'click_25'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_26'); ?>
		<?php echo $form->textField($model,'click_26'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_27'); ?>
		<?php echo $form->textField($model,'click_27'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_28'); ?>
		<?php echo $form->textField($model,'click_28'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_29'); ?>
		<?php echo $form->textField($model,'click_29'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_30'); ?>
		<?php echo $form->textField($model,'click_30'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_31'); ?>
		<?php echo $form->textField($model,'click_31'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_32'); ?>
		<?php echo $form->textField($model,'click_32'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->