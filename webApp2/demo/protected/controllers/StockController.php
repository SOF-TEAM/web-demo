<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StockController
 *
 * @author jscruz
 */

class StockController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
    
    /**
     * this function is used for the autocomplete requirement
     */
    public function actionAvailableEmployees() {
        $returnValues = array();

        if (isset($_GET['term'])) {
            $empName = $_GET['term'];

            $criteria = new CDbCriteria();
            $criteria->select = 'EMPLOYEE_ID, FIRST_NAME, LAST_NAME';
            $criteria->addSearchCondition("FIRST_NAME", $empName, true);

            $emps = Employee::model()->findAll($criteria);

            foreach ($emps as $emp) {
                $returnValues[] = array(
                    'id' => $emp->EMPLOYEE_ID, // return value from autocomplete
                    'value' => $emp->FIRST_NAME . " " .$emp->LAST_NAME, // value for input field        

                    'nm' => $emp->LAST_NAME, // value for input field        
                );
            }
        }

        echo CJSON::encode($returnValues);
    }
}
