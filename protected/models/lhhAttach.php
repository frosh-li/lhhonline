<?php

/**
 * This is the model class for table "supe_lhhonline_attachments".
 *
 * The followings are the available columns in table 'supe_lhhonline_attachments':
 * @property integer $aid
 * @property integer $isavailable
 * @property string $type
 * @property integer $itemid
 * @property integer $catid
 * @property integer $uid
 * @property string $dateline
 * @property string $filename
 * @property string $subject
 * @property string $attachtype
 * @property integer $isimage
 * @property string $size
 * @property string $filepath
 * @property string $thumbpath
 * @property integer $downloads
 * @property string $hash
 */
class lhhAttach extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return lhhAttach the static model class
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
		return 'supe_lhhonline_attachments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isavailable, itemid, catid, uid, isimage, downloads', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>30),
			array('dateline, attachtype, size', 'length', 'max'=>10),
			array('filename', 'length', 'max'=>150),
			array('subject', 'length', 'max'=>80),
			array('filepath, thumbpath', 'length', 'max'=>200),
			array('hash', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('aid, isavailable, type, itemid, catid, uid, dateline, filename, subject, attachtype, isimage, size, filepath, thumbpath, downloads, hash', 'safe', 'on'=>'search'),
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
			'aid' => 'Aid',
			'isavailable' => 'Isavailable',
			'type' => 'Type',
			'itemid' => 'Itemid',
			'catid' => 'Catid',
			'uid' => 'Uid',
			'dateline' => 'Dateline',
			'filename' => 'Filename',
			'subject' => 'Subject',
			'attachtype' => 'Attachtype',
			'isimage' => 'Isimage',
			'size' => 'Size',
			'filepath' => 'Filepath',
			'thumbpath' => 'Thumbpath',
			'downloads' => 'Downloads',
			'hash' => 'Hash',
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

		$criteria->compare('aid',$this->aid);
		$criteria->compare('isavailable',$this->isavailable);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('itemid',$this->itemid);
		$criteria->compare('catid',$this->catid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('attachtype',$this->attachtype,true);
		$criteria->compare('isimage',$this->isimage);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('filepath',$this->filepath,true);
		$criteria->compare('thumbpath',$this->thumbpath,true);
		$criteria->compare('downloads',$this->downloads);
		$criteria->compare('hash',$this->hash,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}