<?php

/**
 * This is the model class for table "acc_management.tlu_jenjang".
 *
 * The followings are the available columns in table 'acc_management.tlu_jenjang':
 * @property integer $kd_jenjang
 * @property string $nama_jenjang
 *
 * The followings are the available model relations:
 * @property TluUnitOrganisasi[] $tluUnitOrganisasis
 */
class TluJenjang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'role_management.tlu_jenjang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_jenjang', 'required'),
			array('kd_jenjang', 'numerical', 'integerOnly'=>true),
			array('nama_jenjang', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_jenjang, nama_jenjang', 'safe', 'on'=>'search'),
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
			'tluUnitOrganisasis' => array(self::HAS_MANY, 'TluUnitOrganisasi', 'kd_jenjang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_jenjang' => 'Kd Jenjang',
			'nama_jenjang' => 'Nama Jenjang',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('kd_jenjang',$this->kd_jenjang);
		$criteria->compare('nama_jenjang',$this->nama_jenjang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TluJenjang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
