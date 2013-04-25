<?php

/**
 * This is the model class for table "supe_lhhonline_tags".
 *
 * The followings are the available columns in table 'supe_lhhonline_tags':
 * @property integer $tagid
 * @property string $tagname
 * @property integer $uid
 * @property string $username
 * @property string $dateline
 * @property integer $close
 * @property integer $spacenewsnum
 * @property string $relativetags
 */
class lhhTags extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return lhhTags the static model class
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
		return 'supe_lhhonline_tags';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, close, spacenewsnum', 'numerical', 'integerOnly'=>true),
			array('tagname', 'length', 'max'=>20),
			array('username', 'length', 'max'=>15),
			array('dateline', 'length', 'max'=>10),
			array('relativetags', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tagid, tagname, uid, username, dateline, close, spacenewsnum, relativetags', 'safe', 'on'=>'search'),
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
			'tagid' => 'Tagid',
			'tagname' => 'Tagname',
			'uid' => 'Uid',
			'username' => 'Username',
			'dateline' => 'Dateline',
			'close' => 'Close',
			'spacenewsnum' => 'Spacenewsnum',
			'relativetags' => 'Relativetags',
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

		$criteria->compare('tagid',$this->tagid);
		$criteria->compare('tagname',$this->tagname,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('close',$this->close);
		$criteria->compare('spacenewsnum',$this->spacenewsnum);
		$criteria->compare('relativetags',$this->relativetags,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}