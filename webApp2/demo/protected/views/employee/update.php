<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->EMPLOYEE_ID=>array('view','id'=>$model->EMPLOYEE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'View Employee', 'url'=>array('view', 'id'=>$model->EMPLOYEE_ID)),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Update Employee <?php echo $model->EMPLOYEE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>