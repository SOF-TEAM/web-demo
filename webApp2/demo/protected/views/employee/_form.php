<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EMPLOYEE_ID'); ?>
		<?php echo $form->textField($model,'EMPLOYEE_ID',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'EMPLOYEE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FIRST_NAME'); ?>
		<?php echo $form->textField($model,'FIRST_NAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FIRST_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LAST_NAME'); ?>
		<?php echo $form->textField($model,'LAST_NAME',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'LAST_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PHONE_NUMBER'); ?>
		<?php echo $form->textField($model,'PHONE_NUMBER',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PHONE_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HIRE_DATE'); ?>
		<?php echo $form->textField($model,'HIRE_DATE'); ?>
		<?php echo $form->error($model,'HIRE_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_ID'); ?>
		<?php echo $form->textField($model,'JOB_ID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'JOB_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SALARY'); ?>
		<?php echo $form->textField($model,'SALARY',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'SALARY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMMISSION_PCT'); ?>
		<?php echo $form->textField($model,'COMMISSION_PCT',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'COMMISSION_PCT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MANAGER_ID'); ?>
		<?php echo $form->textField($model,'MANAGER_ID',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'MANAGER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEPARTMENT_ID'); ?>
		<?php echo $form->textField($model,'DEPARTMENT_ID',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'DEPARTMENT_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->