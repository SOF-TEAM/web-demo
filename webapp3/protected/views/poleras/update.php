<?php
/* @var $this PolerasController */
/* @var $model Poleras */

$this->breadcrumbs=array(
	'Polerases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Poleras', 'url'=>array('index')),
	array('label'=>'Create Poleras', 'url'=>array('create')),
	array('label'=>'View Poleras', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Poleras', 'url'=>array('admin')),
);
?>

<h1>Update Poleras <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>