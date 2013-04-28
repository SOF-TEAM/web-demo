<?php
/* @var $this PolerasController */
/* @var $model Poleras */

$this->breadcrumbs=array(
	'Polerases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Poleras', 'url'=>array('index')),
	array('label'=>'Create Poleras', 'url'=>array('create')),
	array('label'=>'Update Poleras', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Poleras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Poleras', 'url'=>array('admin')),
);
?>

<h1>View Poleras #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'description',
	),
)); ?>
