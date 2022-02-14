<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Accept request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('accept','id'=>$model->leavereq_id),'confirm'=>'Are you sure you approve this leave?')),
	array('label'=>'Reject request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('reject','id'=>$model->leavereq_id),'confirm'=>'Are you sure you disapprove this leave?')),
);
?>

<h1>Leave request from User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        'leavereq_id',
        'id',
		'reason',
		'startdate',
		'enddate',
		'type',
	),
)); ?>