<?php

/**
 * This is the model class for table "supe_lhhonline_categories".
 *
 * The followings are the available columns in table 'supe_lhhonline_categories':
 * @property integer $catid
 * @property integer $upid
 * @property string $name
 * @property string $note
 * @property string $type
 * @property integer $ischannel
 * @property integer $displayorder
 * @property string $tpl
 * @property string $viewtpl
 * @property string $thumb
 * @property string $image
 * @property integer $haveattach
 * @property integer $bbsmodel
 * @property string $bbsurltype
 * @property integer $blockmodel
 * @property string $blockparameter
 * @property string $blocktext
 * @property string $url
 * @property string $subcatid
 * @property string $htmlpath
 * @property string $domain
 * @property integer $perpage
 * @property string $prehtml
 */
class lhhCategories extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return lhhCategories the static model class
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
		return 'supe_lhhonline_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('note, blockparameter, blocktext, subcatid, prehtml', 'required'),
			array('upid, ischannel, displayorder, haveattach, bbsmodel, blockmodel, perpage', 'numerical', 'integerOnly'=>true),
			array('name, domain', 'length', 'max'=>50),
			array('type', 'length', 'max'=>30),
			array('tpl, viewtpl, htmlpath', 'length', 'max'=>80),
			array('thumb, image', 'length', 'max'=>150),
			array('bbsurltype', 'length', 'max'=>15),
			array('url', 'length', 'max'=>255),
			array('prehtml', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('catid, upid, name, note, type, ischannel, displayorder, tpl, viewtpl, thumb, image, haveattach, bbsmodel, bbsurltype, blockmodel, blockparameter, blocktext, url, subcatid, htmlpath, domain, perpage, prehtml', 'safe', 'on'=>'search'),
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
			'catid' => 'Catid',
			'upid' => 'Upid',
			'name' => 'Name',
			'note' => 'Note',
			'type' => 'Type',
			'ischannel' => 'Ischannel',
			'displayorder' => 'Displayorder',
			'tpl' => 'Tpl',
			'viewtpl' => 'Viewtpl',
			'thumb' => 'Thumb',
			'image' => 'Image',
			'haveattach' => 'Haveattach',
			'bbsmodel' => 'Bbsmodel',
			'bbsurltype' => 'Bbsurltype',
			'blockmodel' => 'Blockmodel',
			'blockparameter' => 'Blockparameter',
			'blocktext' => 'Blocktext',
			'url' => 'Url',
			'subcatid' => 'Subcatid',
			'htmlpath' => 'Htmlpath',
			'domain' => 'Domain',
			'perpage' => 'Perpage',
			'prehtml' => 'Prehtml',
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

		$criteria->compare('catid',$this->catid);
		$criteria->compare('upid',$this->upid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('ischannel',$this->ischannel);
		$criteria->compare('displayorder',$this->displayorder);
		$criteria->compare('tpl',$this->tpl,true);
		$criteria->compare('viewtpl',$this->viewtpl,true);
		$criteria->compare('thumb',$this->thumb,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('haveattach',$this->haveattach);
		$criteria->compare('bbsmodel',$this->bbsmodel);
		$criteria->compare('bbsurltype',$this->bbsurltype,true);
		$criteria->compare('blockmodel',$this->blockmodel);
		$criteria->compare('blockparameter',$this->blockparameter,true);
		$criteria->compare('blocktext',$this->blocktext,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('subcatid',$this->subcatid,true);
		$criteria->compare('htmlpath',$this->htmlpath,true);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('perpage',$this->perpage);
		$criteria->compare('prehtml',$this->prehtml,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}