<?php

/**
 * This is the model class for table "acc_management.tlu_unit_organisasi".
 *
 * The followings are the available columns in table 'acc_management.tlu_unit_organisasi':
 * @property integer $id
 * @property string $kode_organisasi
 * @property string $nama_org_ind
 * @property integer $kd_jenjang
 * @property string $kd_prg_pendidikan
 * @property integer $kd_jenis_org
 * @property string $kd_parent_org
 * @property integer $kd_rumpun
 * @property string $nama_singkat
 *
 * The followings are the available model relations:
 * @property PenerimaPaketBeasiswa[] $penerimaPaketBeasiswas
 * @property Pelamar[] $pelamars
 * @property PaketBeasiswaUnitOrganisasi[] $paketBeasiswaUnitOrganisasis
 * @property TluUnitOrganisasi $kdParentOrg
 * @property TluUnitOrganisasi[] $tluUnitOrganisasis
 * @property TluJenisProgramStudi $kdPrgPendidikan
 * @property TluJenjang $kdJenjang
 * @property UserRoleOrganisasi[] $userRoleOrganisasis
 */
class TluUnitOrganisasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'complaint.tlu_unit_organisasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_organisasi, nama_org_ind, kd_jenis_org, kd_parent_org', 'required'),
			array('kd_jenjang, kd_jenis_org, kd_rumpun', 'numerical', 'integerOnly'=>true),
			array('kode_organisasi, kd_parent_org', 'length', 'max'=>25),
			array('nama_org_ind', 'length', 'max'=>120),
			array('kd_prg_pendidikan', 'length', 'max'=>2),
			array('nama_singkat', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_organisasi, nama_org_ind, kd_jenjang, kd_prg_pendidikan, kd_jenis_org, kd_parent_org, kd_rumpun, nama_singkat', 'safe', 'on'=>'search'),
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
			'penerimaPaketBeasiswas' => array(self::HAS_MANY, 'PenerimaPaketBeasiswa', 'kode_organisasi'),
			'pelamars' => array(self::HAS_MANY, 'Pelamar', 'kode_organisasi'),
			'paketBeasiswaUnitOrganisasis' => array(self::HAS_MANY, 'PaketBeasiswaUnitOrganisasi', 'kode_organisasi'),
			'kdParentOrg' => array(self::BELONGS_TO, 'TluUnitOrganisasi', 'kd_parent_org'),
			'tluUnitOrganisasis' => array(self::HAS_MANY, 'TluUnitOrganisasi', 'kd_parent_org'),
			'kdPrgPendidikan' => array(self::BELONGS_TO, 'TluJenisProgramStudi', 'kd_prg_pendidikan'),
			'kdJenjang' => array(self::BELONGS_TO, 'TluJenjang', 'kd_jenjang'),
			'userRoleOrganisasis' => array(self::HAS_MANY, 'UserRoleOrganisasi', 'id_tlu_unit_organisasi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kode_organisasi' => 'Kode Organisasi',
			'nama_org_ind' => 'Nama Org Ind',
			'kd_jenjang' => 'Kd Jenjang',
			'kd_prg_pendidikan' => 'Kd Prg Pendidikan',
			'kd_jenis_org' => 'Kd Jenis Org',
			'kd_parent_org' => 'Kd Parent Org',
			'kd_rumpun' => 'Kd Rumpun',
			'nama_singkat' => 'Nama Singkat',
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
		$criteria->compare('kode_organisasi',$this->kode_organisasi,true);
		$criteria->compare('nama_org_ind',$this->nama_org_ind,true);
		$criteria->compare('kd_jenjang',$this->kd_jenjang);
		$criteria->compare('kd_prg_pendidikan',$this->kd_prg_pendidikan,true);
		$criteria->compare('kd_jenis_org',$this->kd_jenis_org);
		$criteria->compare('kd_parent_org',$this->kd_parent_org,true);
		$criteria->compare('kd_rumpun',$this->kd_rumpun);
		$criteria->compare('nama_singkat',$this->nama_singkat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TluUnitOrganisasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getFakultas() {

		$sqlQuery = "SELECT 
			kode_organisasi, nama_org_ind
			FROM
			complaint.tlu_unit_organisasi
			WHERE
			kode_organisasi LIKE '__.__'
			OR
			kode_organisasi LIKE '__'
			ORDER BY
			kode_organisasi";

		$sql = Yii::app()->db->createCommand($sqlQuery);
		$rawData = $sql->queryAll($sql);

		return $rawData;

	}

	public function getDepartemen($kodeFakultas) {

		$sqlQuery = "
			SELECT 
			kode_organisasi, nama_org_ind
			FROM
			complaint.tlu_unit_organisasi
			WHERE 
			kode_organisasi LIKE '__.__.__'
			AND 
			--kd_parent_org =:kodeFakultas
			RIGHT(kode_organisasi, 5) = :kodeFakultas
			ORDER BY
			kode_organisasi";

		$sql = Yii::app()->db->createCommand($sqlQuery);
		$sql->bindParam(":kodeFakultas", $kodeFakultas, PDO::PARAM_STR);
		$rawData = $sql->queryAll($sql);

		return $rawData;

	}

	public function getProdiByDepartemen($kodeDepartemen) {

		$sqlQuery = "
			SELECT 
			a.kode_organisasi, a.nama_org_ind, b.nama_jenjang, c.nama_program_ind
			FROM
			complaint.tlu_unit_organisasi a
			LEFT JOIN 
			complaint.tlu_jenjang b
			ON a.kd_jenjang = b.kd_jenjang
			LEFT JOIN
			complaint.tlu_jenis_program_studi c
			ON a.kd_prg_pendidikan = c.kd_program
			WHERE 
			a.kode_organisasi LIKE '__.__.__.__'
			AND
			--a.kd_parent_org = :kodeDepartemen
			RIGHT(kode_organisasi, 8) = :kodeDepartemen
			ORDER BY
			kode_organisasi		
		";

		$sql = Yii::app()->db->createCommand($sqlQuery);
		$sql->bindParam(":kodeDepartemen", $kodeDepartemen, PDO::PARAM_STR);
		$rawData = $sql->queryAll($sql);

		return $rawData;

	}

	public function getProdiByFakultas($kodeFakultas) {

		$sqlQuery = "
			SELECT 
			a.kode_organisasi, a.nama_org_ind, b.nama_jenjang, c.nama_program_ind
			FROM
			complaint.tlu_unit_organisasi a
			LEFT JOIN 
			complaint.tlu_jenjang b
			ON a.kd_jenjang = b.kd_jenjang
			LEFT JOIN
			complaint.tlu_jenis_program_studi c
			ON a.kd_prg_pendidikan = c.kd_program
			WHERE 
			a.kode_organisasi LIKE '__.__.__.__'
			AND
			--a.kd_parent_org = :kodeFakultas
			RIGHT(kode_organisasi, 5) = :kodeFakultas
			ORDER BY
			a.kode_organisasi	
			";

		$sql = Yii::app()->db->createCommand($sqlQuery);
		$sql->bindParam(":kodeFakultas", $kodeFakultas, PDO::PARAM_STR);
		$rawData = $sql->queryAll($sql);

		return $rawData;

	}

}
