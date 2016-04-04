<?php

/**
 * This is the model class for table "acc_management.menu".
 *
 * The followings are the available columns in table 'acc_management.menu':
 * @property integer $id
 * @property string $name
 * @property string $label
 * @property string $before_tag
 * @property string $after_tag
 * @property string $html_options
 * @property string $url
 * @property boolean $visible
 *
 * The followings are the available model relations:
 * @property MenuChild[] $menuChildren
 * @property MenuChild[] $menuChildren1
 * @property RoleMenu[] $roleMenus
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'complaint.menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, label', 'length', 'max'=>60),
			array('url', 'length', 'max'=>100),
			array('before_tag, after_tag, html_options, visible', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, label, before_tag, after_tag, html_options, url, visible', 'safe', 'on'=>'search'),
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
			'menuChildren' => array(self::HAS_MANY, 'MenuChild', 'id_parent'),
			'menuChildren1' => array(self::HAS_MANY, 'MenuChild', 'id_child'),
			'roleMenus' => array(self::HAS_MANY, 'RoleMenu', 'id_menu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'label' => 'Label',
			'before_tag' => 'Before Tag',
			'after_tag' => 'After Tag',
			'html_options' => 'Html Options',
			'url' => 'Url',
			'visible' => 'Visible',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('before_tag',$this->before_tag,true);
		$criteria->compare('after_tag',$this->after_tag,true);
		$criteria->compare('html_options',$this->html_options,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('visible',$this->visible);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getMenuByRole($roleId){
	
		$getParentMenu = RoleMenu::model()->find('itemname=:roleId', array(':roleId'=>$roleId));
		
		$sqlQuery = "SELECT
				a.id, a.id_parent, a.id_child, 
				b.name as name_parent, b.label as label_parent, 
				b.before_tag as before_tag_parent, b.after_tag as after_tag_parent, 
				b.html_options as html_options_parent, b.url as url_parent, b.visible as visible_parent,
				c.name, c.label, c.before_tag, c.after_tag, c.html_options, c.url, c.visible
				FROM
				complaint.menu_child a
				INNER JOIN
				complaint.menu b
				ON a.id_parent = b.id
				INNER JOIN
				complaint.menu c
				ON a.id_child = c.id 
				WHERE a.id_parent = :idMenuParent
				AND 
				b.visible = true
				AND
				c.visible = true
				";
				
		$idMenuParent = $getParentMenu->id_menu;		
		//echo $idMenuParent;
		$sql = Yii::app()->db->createCommand($sqlQuery);
		$sql->bindParam(":idMenuParent", $idMenuParent, PDO::PARAM_STR); 	
		$resultSet = $sql->queryAll();

		return $resultSet; 	

	}
	
}
