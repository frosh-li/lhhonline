<?php
/* @var $this LhhItemsController */
/* @var $data lhhItems */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->itemid), array('view', 'id'=>$data->itemid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catid')); ?>:</b>
	<?php echo CHtml::encode($data->catid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemtypeid')); ?>:</b>
	<?php echo CHtml::encode($data->itemtypeid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('subtype')); ?>:</b>
	<?php echo CHtml::encode($data->subtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateline')); ?>:</b>
	<?php echo CHtml::encode($data->dateline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastpost')); ?>:</b>
	<?php echo CHtml::encode($data->lastpost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewnum')); ?>:</b>
	<?php echo CHtml::encode($data->viewnum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replynum')); ?>:</b>
	<?php echo CHtml::encode($data->replynum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('digest')); ?>:</b>
	<?php echo CHtml::encode($data->digest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('top')); ?>:</b>
	<?php echo CHtml::encode($data->top); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allowreply')); ?>:</b>
	<?php echo CHtml::encode($data->allowreply); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hash')); ?>:</b>
	<?php echo CHtml::encode($data->hash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('haveattach')); ?>:</b>
	<?php echo CHtml::encode($data->haveattach); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gid')); ?>:</b>
	<?php echo CHtml::encode($data->gid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gdigest')); ?>:</b>
	<?php echo CHtml::encode($data->gdigest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('styletitle')); ?>:</b>
	<?php echo CHtml::encode($data->styletitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picid')); ?>:</b>
	<?php echo CHtml::encode($data->picid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromtype')); ?>:</b>
	<?php echo CHtml::encode($data->fromtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromid')); ?>:</b>
	<?php echo CHtml::encode($data->fromid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot')); ?>:</b>
	<?php echo CHtml::encode($data->hot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_1')); ?>:</b>
	<?php echo CHtml::encode($data->click_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_2')); ?>:</b>
	<?php echo CHtml::encode($data->click_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_3')); ?>:</b>
	<?php echo CHtml::encode($data->click_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_4')); ?>:</b>
	<?php echo CHtml::encode($data->click_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_5')); ?>:</b>
	<?php echo CHtml::encode($data->click_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_6')); ?>:</b>
	<?php echo CHtml::encode($data->click_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_7')); ?>:</b>
	<?php echo CHtml::encode($data->click_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_8')); ?>:</b>
	<?php echo CHtml::encode($data->click_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_9')); ?>:</b>
	<?php echo CHtml::encode($data->click_9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_10')); ?>:</b>
	<?php echo CHtml::encode($data->click_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_11')); ?>:</b>
	<?php echo CHtml::encode($data->click_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_12')); ?>:</b>
	<?php echo CHtml::encode($data->click_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_13')); ?>:</b>
	<?php echo CHtml::encode($data->click_13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_14')); ?>:</b>
	<?php echo CHtml::encode($data->click_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_15')); ?>:</b>
	<?php echo CHtml::encode($data->click_15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_16')); ?>:</b>
	<?php echo CHtml::encode($data->click_16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_17')); ?>:</b>
	<?php echo CHtml::encode($data->click_17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_18')); ?>:</b>
	<?php echo CHtml::encode($data->click_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_19')); ?>:</b>
	<?php echo CHtml::encode($data->click_19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_20')); ?>:</b>
	<?php echo CHtml::encode($data->click_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_21')); ?>:</b>
	<?php echo CHtml::encode($data->click_21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_22')); ?>:</b>
	<?php echo CHtml::encode($data->click_22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_23')); ?>:</b>
	<?php echo CHtml::encode($data->click_23); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_24')); ?>:</b>
	<?php echo CHtml::encode($data->click_24); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_25')); ?>:</b>
	<?php echo CHtml::encode($data->click_25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_26')); ?>:</b>
	<?php echo CHtml::encode($data->click_26); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_27')); ?>:</b>
	<?php echo CHtml::encode($data->click_27); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_28')); ?>:</b>
	<?php echo CHtml::encode($data->click_28); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_29')); ?>:</b>
	<?php echo CHtml::encode($data->click_29); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_30')); ?>:</b>
	<?php echo CHtml::encode($data->click_30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_31')); ?>:</b>
	<?php echo CHtml::encode($data->click_31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_32')); ?>:</b>
	<?php echo CHtml::encode($data->click_32); ?>
	<br />

	*/ ?>

</div>