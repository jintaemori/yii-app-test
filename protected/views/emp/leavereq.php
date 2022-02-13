<?php
echo 'hello ' . Yii::app()->user->name;
?>
<?php
$this->pageTitle=Yii::app()->name . ' - Leavereq';
$this->breadcrumbs=array(
	'Leavereq',
);
?>

<h1>Leave Request</h1>

<p>Please fill out the following form to apply for a leave:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'leavereq-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">
        <?php echo $form->labelEx($model,'reason'); ?>
        <?php echo $form->textField($model,'reason'); ?>
        <?php echo $form->error($model,'reason'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'startdate'); ?>
        <?php echo $form->textField($model,'startdate'); ?>
        <?php echo $form->error($model,'startdate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'enddate'); ?>
        <?php echo $form->textField($model,'enddate'); ?>
        <?php echo $form->error($model,'enddate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'type'); ?>
        <?php echo $form->textField($model,'type'); ?>
        <?php echo $form->error($model,'type'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Leavereq'); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->