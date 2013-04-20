<?php

/**
 * This is the model class for table "supe_lhhonline_spacenews".
 *
 * The followings are the available columns in table 'supe_lhhonline_spacenews':
 * @property integer $nid
 * @property integer $itemid
 * @property string $message
 * @property string $relativetags
 * @property string $postip
 * @property string $relativeitemids
 * @property integer $customfieldid
 * @property string $customfieldtext
 * @property string $includetags
 * @property string $newsauthor
 * @property string $newsfrom
 * @property string $newsfromurl
 * @property string $newsurl
 * @property integer $pageorder
 */
class lhhNews extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return lhhNews the static model class
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
		return 'supe_lhhonline_spacenews';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('message, relativetags, customfieldtext, includetags', 'required'),
			array('itemid, customfieldid, pageorder', 'numerical', 'integerOnly'=>true),
			array('postip', 'length', 'max'=>15),
			array('relativeitemids, newsurl', 'length', 'max'=>255),
			array('newsauthor', 'length', 'max'=>20),
			array('newsfrom', 'length', 'max'=>50),
			array('newsfromurl', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nid, itemid, message, relativetags, postip, relativeitemids, customfieldid, customfieldtext, includetags, newsauthor, newsfrom, newsfromurl, newsurl, pageorder', 'safe', 'on'=>'search'),
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
			'nid' => 'Nid',
			'itemid' => 'Itemid',
			'message' => 'Message',
			'relativetags' => 'Relativetags',
			'postip' => 'Postip',
			'relativeitemids' => 'Relativeitemids',
			'customfieldid' => 'Customfieldid',
			'customfieldtext' => 'Customfieldtext',
			'includetags' => 'Includetags',
			'newsauthor' => 'Newsauthor',
			'newsfrom' => 'Newsfrom',
			'newsfromurl' => 'Newsfromurl',
			'newsurl' => 'Newsurl',
			'pageorder' => 'Pageorder',
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

		$criteria->compare('nid',$this->nid);
		$criteria->compare('itemid',$this->itemid);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('relativetags',$this->relativetags,true);
		$criteria->compare('postip',$this->postip,true);
		$criteria->compare('relativeitemids',$this->relativeitemids,true);
		$criteria->compare('customfieldid',$this->customfieldid);
		$criteria->compare('customfieldtext',$this->customfieldtext,true);
		$criteria->compare('includetags',$this->includetags,true);
		$criteria->compare('newsauthor',$this->newsauthor,true);
		$criteria->compare('newsfrom',$this->newsfrom,true);
		$criteria->compare('newsfromurl',$this->newsfromurl,true);
		$criteria->compare('newsurl',$this->newsurl,true);
		$criteria->compare('pageorder',$this->pageorder);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}