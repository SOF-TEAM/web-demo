<?php

/**
 * This is the model class for table "EMPLOYEES".
 *
 * The followings are the available columns in table 'EMPLOYEES':
 * @property string $EMPLOYEE_ID
 * @property string $FIRST_NAME
 * @property string $LAST_NAME
 * @property string $EMAIL
 * @property string $PHONE_NUMBER
 * @property string $HIRE_DATE
 * @property string $JOB_ID
 * @property string $SALARY
 * @property string $COMMISSION_PCT
 * @property string $MANAGER_ID
 * @property string $DEPARTMENT_ID
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'EMPLOYEES';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMPLOYEE_ID, LAST_NAME, EMAIL, HIRE_DATE, JOB_ID', 'required'),
			array('EMPLOYEE_ID, MANAGER_ID', 'length', 'max'=>6),
			array('FIRST_NAME, PHONE_NUMBER', 'length', 'max'=>20),
			array('LAST_NAME, EMAIL', 'length', 'max'=>25),
			array('JOB_ID', 'length', 'max'=>10),
			array('SALARY', 'length', 'max'=>8),
			array('COMMISSION_PCT', 'length', 'max'=>2),
			array('DEPARTMENT_ID', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER, HIRE_DATE, JOB_ID, SALARY, COMMISSION_PCT, MANAGER_ID, DEPARTMENT_ID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EMPLOYEE_ID' => 'Employee',
			'FIRST_NAME' => 'First Name',
			'LAST_NAME' => 'Last Name',
			'EMAIL' => 'Email',
			'PHONE_NUMBER' => 'Phone Number',
			'HIRE_DATE' => 'Hire Date',
			'JOB_ID' => 'Job',
			'SALARY' => 'Salary',
			'COMMISSION_PCT' => 'Commission Pct',
			'MANAGER_ID' => 'Manager',
			'DEPARTMENT_ID' => 'Department',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('EMPLOYEE_ID',$this->EMPLOYEE_ID,true);
		$criteria->compare('FIRST_NAME',$this->FIRST_NAME,true);
		$criteria->compare('LAST_NAME',$this->LAST_NAME,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('PHONE_NUMBER',$this->PHONE_NUMBER,true);
		$criteria->compare('HIRE_DATE',$this->HIRE_DATE,true);
		$criteria->compare('JOB_ID',$this->JOB_ID,true);
		$criteria->compare('SALARY',$this->SALARY,true);
		$criteria->compare('COMMISSION_PCT',$this->COMMISSION_PCT,true);
		$criteria->compare('MANAGER_ID',$this->MANAGER_ID,true);
		$criteria->compare('DEPARTMENT_ID',$this->DEPARTMENT_ID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}