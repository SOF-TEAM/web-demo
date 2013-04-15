<?php
/* @var $this PolerasController */
/* @var $model Poleras */

$this->breadcrumbs=array(
	'Polerases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Poleras', 'url'=>array('index')),
	array('label'=>'Manage Poleras', 'url'=>array('admin')),
);
?>

<h1>Create Poleras</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>