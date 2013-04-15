<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->EMPLOYEE_ID,
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->EMPLOYEE_ID)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMPLOYEE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->EMPLOYEE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EMPLOYEE_ID',
		'FIRST_NAME',
		'LAST_NAME',
		'EMAIL',
		'PHONE_NUMBER',
		'HIRE_DATE',
		'JOB_ID',
		'SALARY',
		'COMMISSION_PCT',
		'MANAGER_ID',
		'DEPARTMENT_ID',
	),
)); ?>
