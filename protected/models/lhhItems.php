<?php

/**
 * This is the model class for table "supe_lhhonline_spaceitems".
 *
 * The followings are the available columns in table 'supe_lhhonline_spaceitems':
 * @property integer $itemid
 * @property integer $catid
 * @property integer $uid
 * @property integer $tid
 * @property string $username
 * @property integer $itemtypeid
 * @property string $type
 * @property string $subtype
 * @property string $subject
 * @property string $dateline
 * @property string $lastpost
 * @property integer $viewnum
 * @property integer $replynum
 * @property integer $digest
 * @property integer $top
 * @property integer $allowreply
 * @property string $hash
 * @property integer $haveattach
 * @property integer $grade
 * @property integer $gid
 * @property integer $gdigest
 * @property string $password
 * @property string $styletitle
 * @property integer $picid
 * @property string $fromtype
 * @property integer $fromid
 * @property integer $hot
 * @property integer $click_1
 * @property integer $click_2
 * @property integer $click_3
 * @property integer $click_4
 * @property integer $click_5
 * @property integer $click_6
 * @property integer $click_7
 * @property integer $click_8
 * @property integer $click_9
 * @property integer $click_10
 * @property integer $click_11
 * @property integer $click_12
 * @property integer $click_13
 * @property integer $click_14
 * @property integer $click_15
 * @property integer $click_16
 * @property integer $click_17
 * @property integer $click_18
 * @property integer $click_19
 * @property integer $click_20
 * @property integer $click_21
 * @property integer $click_22
 * @property integer $click_23
 * @property integer $click_24
 * @property integer $click_25
 * @property integer $click_26
 * @property integer $click_27
 * @property integer $click_28
 * @property integer $click_29
 * @property integer $click_30
 * @property integer $click_31
 * @property integer $click_32
 */
class lhhItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return lhhItems the static model class
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
		return 'supe_lhhonline_spaceitems';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catid, uid, tid, itemtypeid, viewnum, replynum, digest, top, allowreply, haveattach, grade, gid, gdigest, picid, fromid, hot, click_1, click_2, click_3, click_4, click_5, click_6, click_7, click_8, click_9, click_10, click_11, click_12, click_13, click_14, click_15, click_16, click_17, click_18, click_19, click_20, click_21, click_22, click_23, click_24, click_25, click_26, click_27, click_28, click_29, click_30, click_31, click_32', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>15),
			array('type', 'length', 'max'=>30),
			array('subtype, dateline, lastpost, password, fromtype', 'length', 'max'=>10),
			array('subject', 'length', 'max'=>80),
			array('hash', 'length', 'max'=>16),
			array('styletitle', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('itemid, catid, uid, tid, username, itemtypeid, type, subtype, subject, dateline, lastpost, viewnum, replynum, digest, top, allowreply, hash, haveattach, grade, gid, gdigest, password, styletitle, picid, fromtype, fromid, hot, click_1, click_2, click_3, click_4, click_5, click_6, click_7, click_8, click_9, click_10, click_11, click_12, click_13, click_14, click_15, click_16, click_17, click_18, click_19, click_20, click_21, click_22, click_23, click_24, click_25, click_26, click_27, click_28, click_29, click_30, click_31, click_32', 'safe', 'on'=>'search'),
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
			'itemid' => 'Itemid',
			'catid' => 'Catid',
			'uid' => 'Uid',
			'tid' => 'Tid',
			'username' => 'Username',
			'itemtypeid' => 'Itemtypeid',
			'type' => 'Type',
			'subtype' => 'Subtype',
			'subject' => 'Subject',
			'dateline' => 'Dateline',
			'lastpost' => 'Lastpost',
			'viewnum' => 'Viewnum',
			'replynum' => 'Replynum',
			'digest' => 'Digest',
			'top' => 'Top',
			'allowreply' => 'Allowreply',
			'hash' => 'Hash',
			'haveattach' => 'Haveattach',
			'grade' => 'Grade',
			'gid' => 'Gid',
			'gdigest' => 'Gdigest',
			'password' => 'Password',
			'styletitle' => 'Styletitle',
			'picid' => 'Picid',
			'fromtype' => 'Fromtype',
			'fromid' => 'Fromid',
			'hot' => 'Hot',
			'click_1' => 'Click 1',
			'click_2' => 'Click 2',
			'click_3' => 'Click 3',
			'click_4' => 'Click 4',
			'click_5' => 'Click 5',
			'click_6' => 'Click 6',
			'click_7' => 'Click 7',
			'click_8' => 'Click 8',
			'click_9' => 'Click 9',
			'click_10' => 'Click 10',
			'click_11' => 'Click 11',
			'click_12' => 'Click 12',
			'click_13' => 'Click 13',
			'click_14' => 'Click 14',
			'click_15' => 'Click 15',
			'click_16' => 'Click 16',
			'click_17' => 'Click 17',
			'click_18' => 'Click 18',
			'click_19' => 'Click 19',
			'click_20' => 'Click 20',
			'click_21' => 'Click 21',
			'click_22' => 'Click 22',
			'click_23' => 'Click 23',
			'click_24' => 'Click 24',
			'click_25' => 'Click 25',
			'click_26' => 'Click 26',
			'click_27' => 'Click 27',
			'click_28' => 'Click 28',
			'click_29' => 'Click 29',
			'click_30' => 'Click 30',
			'click_31' => 'Click 31',
			'click_32' => 'Click 32',
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

		$criteria->compare('itemid',$this->itemid);
		$criteria->compare('catid',$this->catid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('itemtypeid',$this->itemtypeid);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('subtype',$this->subtype,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('lastpost',$this->lastpost,true);
		$criteria->compare('viewnum',$this->viewnum);
		$criteria->compare('replynum',$this->replynum);
		$criteria->compare('digest',$this->digest);
		$criteria->compare('top',$this->top);
		$criteria->compare('allowreply',$this->allowreply);
		$criteria->compare('hash',$this->hash,true);
		$criteria->compare('haveattach',$this->haveattach);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('gid',$this->gid);
		$criteria->compare('gdigest',$this->gdigest);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('styletitle',$this->styletitle,true);
		$criteria->compare('picid',$this->picid);
		$criteria->compare('fromtype',$this->fromtype,true);
		$criteria->compare('fromid',$this->fromid);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('click_1',$this->click_1);
		$criteria->compare('click_2',$this->click_2);
		$criteria->compare('click_3',$this->click_3);
		$criteria->compare('click_4',$this->click_4);
		$criteria->compare('click_5',$this->click_5);
		$criteria->compare('click_6',$this->click_6);
		$criteria->compare('click_7',$this->click_7);
		$criteria->compare('click_8',$this->click_8);
		$criteria->compare('click_9',$this->click_9);
		$criteria->compare('click_10',$this->click_10);
		$criteria->compare('click_11',$this->click_11);
		$criteria->compare('click_12',$this->click_12);
		$criteria->compare('click_13',$this->click_13);
		$criteria->compare('click_14',$this->click_14);
		$criteria->compare('click_15',$this->click_15);
		$criteria->compare('click_16',$this->click_16);
		$criteria->compare('click_17',$this->click_17);
		$criteria->compare('click_18',$this->click_18);
		$criteria->compare('click_19',$this->click_19);
		$criteria->compare('click_20',$this->click_20);
		$criteria->compare('click_21',$this->click_21);
		$criteria->compare('click_22',$this->click_22);
		$criteria->compare('click_23',$this->click_23);
		$criteria->compare('click_24',$this->click_24);
		$criteria->compare('click_25',$this->click_25);
		$criteria->compare('click_26',$this->click_26);
		$criteria->compare('click_27',$this->click_27);
		$criteria->compare('click_28',$this->click_28);
		$criteria->compare('click_29',$this->click_29);
		$criteria->compare('click_30',$this->click_30);
		$criteria->compare('click_31',$this->click_31);
		$criteria->compare('click_32',$this->click_32);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}