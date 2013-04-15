<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMPLOYEE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EMPLOYEE_ID), array('view', 'id'=>$data->EMPLOYEE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIRST_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FIRST_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAST_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->LAST_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONE_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->PHONE_NUMBER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HIRE_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->HIRE_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_ID')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SALARY')); ?>:</b>
	<?php echo CHtml::encode($data->SALARY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMMISSION_PCT')); ?>:</b>
	<?php echo CHtml::encode($data->COMMISSION_PCT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MANAGER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MANAGER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEPARTMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->DEPARTMENT_ID); ?>
	<br />

	*/ ?>

</div>