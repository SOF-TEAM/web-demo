<?php
/* @var $this StockController */

$this->breadcrumbs=array(
    'Stock',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>

<h3>New one</h3>

<p>
    <?php $this->widget('bootstrap.widgets.TbTypeahead', array(
    'name'=>'typeahead',
    'options'=>array(
        'source'=>array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'),
        'items'=>4,
        'matcher'=>"js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }",
    ),
)); ?>
</p>

<h3>Old one</h3>

<p>
     <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'name'=>'test2',
            'source'=>$this->createUrl('stock/availableEmployees'),
        ));
     ?>
</p>