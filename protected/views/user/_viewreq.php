<?php
/* @var $this UserController */
/* @var $data User */
?>
<?php if($data->status == 0) : ?>
<div class="view">
    <h3>Pending Request</h3>
	<b><?php echo CHtml::encode($data->getAttributeLabel('leavereq_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->leavereq_id), array('viewreq', 'id'=>$data->leavereq_id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Start date')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('End date')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

</div>


<?php elseif($data->status == 1) : ?>
<div class="view">
    <h3>Accepted Request</h3>
	<b><?php echo CHtml::encode($data->getAttributeLabel('leavereq_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->leavereq_id), array('viewreq', 'id'=>$data->leavereq_id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Start date')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('End date')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

</div>

<?php elseif($data->status == -1) : ?>
<div class="view">
    <h3>Rejected Request</h3>
	<b><?php echo CHtml::encode($data->getAttributeLabel('leavereq_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->leavereq_id), array('viewreq', 'id'=>$data->leavereq_id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Start date')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('End date')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

</div>
<?php endif; ?>