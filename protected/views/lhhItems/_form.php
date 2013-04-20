<?php
/* @var $this LhhItemsController */
/* @var $model lhhItems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lhh-items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'catid'); ?>
		<?php echo $form->textField($model,'catid'); ?>
		<?php echo $form->error($model,'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tid'); ?>
		<?php echo $form->textField($model,'tid'); ?>
		<?php echo $form->error($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemtypeid'); ?>
		<?php echo $form->textField($model,'itemtypeid'); ?>
		<?php echo $form->error($model,'itemtypeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtype'); ?>
		<?php echo $form->textField($model,'subtype',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'subtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dateline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastpost'); ?>
		<?php echo $form->textField($model,'lastpost',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'lastpost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewnum'); ?>
		<?php echo $form->textField($model,'viewnum'); ?>
		<?php echo $form->error($model,'viewnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'replynum'); ?>
		<?php echo $form->textField($model,'replynum'); ?>
		<?php echo $form->error($model,'replynum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'digest'); ?>
		<?php echo $form->textField($model,'digest'); ?>
		<?php echo $form->error($model,'digest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'top'); ?>
		<?php echo $form->textField($model,'top'); ?>
		<?php echo $form->error($model,'top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allowreply'); ?>
		<?php echo $form->textField($model,'allowreply'); ?>
		<?php echo $form->error($model,'allowreply'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hash'); ?>
		<?php echo $form->textField($model,'hash',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'hash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'haveattach'); ?>
		<?php echo $form->textField($model,'haveattach'); ?>
		<?php echo $form->error($model,'haveattach'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade'); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gid'); ?>
		<?php echo $form->textField($model,'gid'); ?>
		<?php echo $form->error($model,'gid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gdigest'); ?>
		<?php echo $form->textField($model,'gdigest'); ?>
		<?php echo $form->error($model,'gdigest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'styletitle'); ?>
		<?php echo $form->textField($model,'styletitle',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'styletitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picid'); ?>
		<?php echo $form->textField($model,'picid'); ?>
		<?php echo $form->error($model,'picid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fromtype'); ?>
		<?php echo $form->textField($model,'fromtype',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fromtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fromid'); ?>
		<?php echo $form->textField($model,'fromid'); ?>
		<?php echo $form->error($model,'fromid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_1'); ?>
		<?php echo $form->textField($model,'click_1'); ?>
		<?php echo $form->error($model,'click_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_2'); ?>
		<?php echo $form->textField($model,'click_2'); ?>
		<?php echo $form->error($model,'click_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_3'); ?>
		<?php echo $form->textField($model,'click_3'); ?>
		<?php echo $form->error($model,'click_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_4'); ?>
		<?php echo $form->textField($model,'click_4'); ?>
		<?php echo $form->error($model,'click_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_5'); ?>
		<?php echo $form->textField($model,'click_5'); ?>
		<?php echo $form->error($model,'click_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_6'); ?>
		<?php echo $form->textField($model,'click_6'); ?>
		<?php echo $form->error($model,'click_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_7'); ?>
		<?php echo $form->textField($model,'click_7'); ?>
		<?php echo $form->error($model,'click_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_8'); ?>
		<?php echo $form->textField($model,'click_8'); ?>
		<?php echo $form->error($model,'click_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_9'); ?>
		<?php echo $form->textField($model,'click_9'); ?>
		<?php echo $form->error($model,'click_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_10'); ?>
		<?php echo $form->textField($model,'click_10'); ?>
		<?php echo $form->error($model,'click_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_11'); ?>
		<?php echo $form->textField($model,'click_11'); ?>
		<?php echo $form->error($model,'click_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_12'); ?>
		<?php echo $form->textField($model,'click_12'); ?>
		<?php echo $form->error($model,'click_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_13'); ?>
		<?php echo $form->textField($model,'click_13'); ?>
		<?php echo $form->error($model,'click_13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_14'); ?>
		<?php echo $form->textField($model,'click_14'); ?>
		<?php echo $form->error($model,'click_14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_15'); ?>
		<?php echo $form->textField($model,'click_15'); ?>
		<?php echo $form->error($model,'click_15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_16'); ?>
		<?php echo $form->textField($model,'click_16'); ?>
		<?php echo $form->error($model,'click_16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_17'); ?>
		<?php echo $form->textField($model,'click_17'); ?>
		<?php echo $form->error($model,'click_17'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_18'); ?>
		<?php echo $form->textField($model,'click_18'); ?>
		<?php echo $form->error($model,'click_18'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_19'); ?>
		<?php echo $form->textField($model,'click_19'); ?>
		<?php echo $form->error($model,'click_19'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_20'); ?>
		<?php echo $form->textField($model,'click_20'); ?>
		<?php echo $form->error($model,'click_20'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_21'); ?>
		<?php echo $form->textField($model,'click_21'); ?>
		<?php echo $form->error($model,'click_21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_22'); ?>
		<?php echo $form->textField($model,'click_22'); ?>
		<?php echo $form->error($model,'click_22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_23'); ?>
		<?php echo $form->textField($model,'click_23'); ?>
		<?php echo $form->error($model,'click_23'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_24'); ?>
		<?php echo $form->textField($model,'click_24'); ?>
		<?php echo $form->error($model,'click_24'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_25'); ?>
		<?php echo $form->textField($model,'click_25'); ?>
		<?php echo $form->error($model,'click_25'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_26'); ?>
		<?php echo $form->textField($model,'click_26'); ?>
		<?php echo $form->error($model,'click_26'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_27'); ?>
		<?php echo $form->textField($model,'click_27'); ?>
		<?php echo $form->error($model,'click_27'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_28'); ?>
		<?php echo $form->textField($model,'click_28'); ?>
		<?php echo $form->error($model,'click_28'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_29'); ?>
		<?php echo $form->textField($model,'click_29'); ?>
		<?php echo $form->error($model,'click_29'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_30'); ?>
		<?php echo $form->textField($model,'click_30'); ?>
		<?php echo $form->error($model,'click_30'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_31'); ?>
		<?php echo $form->textField($model,'click_31'); ?>
		<?php echo $form->error($model,'click_31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click_32'); ?>
		<?php echo $form->textField($model,'click_32'); ?>
		<?php echo $form->error($model,'click_32'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->