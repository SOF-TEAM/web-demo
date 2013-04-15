<?php
/* @var $this PolerasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Polerases',
);

$this->menu=array(
	array('label'=>'Create Poleras', 'url'=>array('create')),
	array('label'=>'Manage Poleras', 'url'=>array('admin')),
);
?>

<h1>Polerases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
