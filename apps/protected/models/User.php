<?php

/**
 * This is the model class for table "acc_management.user".
 *
 * The followings are the available columns in table 'acc_management.user':
 * @property integer $id
 * @property string $username
 * @property string $nama
 * @property string $email
 * @property string $hp
 *
 * The followings are the available model relations:
 * @property PengelolaKhususPaketBeasiswa[] $pengelolaKhususPaketBeasiswas
 * @property UserPendonor[] $userPendonors
 * @property Pelamar[] $pelamars
 * @property Pelamar[] $pelamars1
 * @property UserRoleOrganisasi[] $userRoleOrganisasis
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'role_management.user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('username, nama, email', 'required'),
			array('username, nama', 'required'),
			array('username, email', 'length', 'max'=>100),
			array('nama', 'length', 'max'=>200),
			array('hp', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, nama, email, hp', 'safe', 'on'=>'search'),
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
			'pengelolaKhususPaketBeasiswas' => array(self::HAS_MANY, 'PengelolaKhususPaketBeasiswa', 'id_user'),
			'userPendonors' => array(self::HAS_MANY, 'UserPendonor', 'id_user'),
			'pelamars' => array(self::HAS_MANY, 'Pelamar', 'id_user_pelamar'),
			'pelamars1' => array(self::HAS_MANY, 'Pelamar', 'id_user_operator'),
			'userRoleOrganisasis' => array(self::HAS_MANY, 'UserRoleOrganisasi', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'nama' => 'Nama',
			'email' => 'Email',
			'hp' => 'Hp',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('hp',$this->hp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
