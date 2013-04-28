<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<div class="form">

<?php
    $this->beginWidget('CActiveForm', array(
    'id'=>'employee-smart-form',
    'enableAjaxValidation'=>false,
));
?>

    <div class="row">
        <?php
//            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
//                'model' => $modelClient,
//                'attribute' => 'FIRST_NAME',
//                'source' => $this->createUrl('employee/availableEmployees'),
//                'options' => array(
//                    'minLength' => '2',
//                    'select'    => "js:function(event, ui) {
//                                        $('#Venta_ID_CLIENTE').val(ui.item.id);
//                                        $('#moneyMonth').val(ui.item.mey);
//                                   }",
//                ),
//                'htmlOptions' => array(
//                    'style' => 'height:20px;',
//                    'size' => '50',
//                ),
//            ));
        ?>
    </div>

    <div class="row">
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'name'=>'test2',
            'source'=>array('ac1', 'ac2', 'ac3', 'fercho1', 'fercho2', 'fercho3', 'dani1', 'dani2', 'dani3' ),
        ));

        ?>
    </div>




<?php 
    $this->endWidget();
?>

</div>
