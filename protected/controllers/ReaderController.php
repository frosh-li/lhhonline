<?php

class ReaderController extends Controller
{
	protected $smarty = '';
	public function actionIndex()
	{
		$this->smarty = Yii::app()->smarty;
		$itemid = intval($_GET['itemid']);
		$type = intval($_GET['type']);//type 1为连环画 type2为综合阅览
		if(empty($itemid)){
			print_r("无效参数");
			exit;
		}
		if($type != 1 and $type != 2){
			print_r("无效参数");
			exit;
		}
		if($type == 1){
			$item = lhhItems::model()->findByAttributes(array("itemid"=>$itemid));
			$picid = $item->picid;
			if(empty($item)){
				print_r("文件不存在");
				exit;
			}
			
			$attachs = lhhAttach::model()->findAllBySql('select * from supe_lhhonline_attachments where aid!='.$picid.' and itemid='.$itemid.' order by aid');
			$ctype = "attachments";
		}else{
			$item = mhItems::model()->findByAttributes(array("itemid"=>$itemid));
			$picid = $item->picid;
			if(empty($item)){
				print_r("文件不存在");
				exit;
			}
			$ctype = "lhhfiles";
			$attachs = mhAttach::model()->findAllBySql('select * from supe_mh_attachments where aid!='.$picid.' and itemid='.$itemid.' order by aid');
			//$this->renderxml($attachs,"lhhfiles");
		}
		$size = getimagesize($ctype.'/'.$attachs[0]->filepath);
		$this->smarty->assign("ctype",$ctype);
		$this->smarty->assign("content",$attachs);
		$this->smarty->assign("width",$size[0]);
		$this->smarty->assign("height",$size[1]);
		$this->smarty->display('bookflip.html');
		
		/*
		$this->smarty->assign("title",$item->subject);
		$this->smarty->assign("itemid",$itemid);
		$this->smarty->assign("type",$type);
		
		$this->smarty->display('reader/index.html');
		*/
	}
	public function actionFlash(){
		$this->smarty = Yii::app()->smarty;
		$itemid = intval($_GET['itemid']);
		$type = intval($_GET['type']);//type 1为连环画 type2为综合阅览
		if(empty($itemid)){
			print_r("无效参数");
			exit;
		}
		if($type != 1 and $type != 2){
			print_r("无效参数");
			exit;
		}
		if($type == 1){
			$item = lhhItems::model()->findByAttributes(array("itemid"=>$itemid));
			
		}else{
			$item = mhItems::model()->findByAttributes(array("itemid"=>$itemid));
		
		}
		
		
		$this->smarty->assign("title",$item->subject);
		$this->smarty->assign("itemid",$itemid);
		$this->smarty->assign("type",$type);
		
		$this->smarty->display('reader/index.html');
		
	}
	public function actionGetxml(){
		header('Content-type:text/plain');
		$itemid = intval($_GET['itemid']);
		$type = intval($_GET['type']);//type 1为连环画 type2为综合阅览
		if(empty($itemid)){
			print_r("无效参数");
			exit;
		}
		if($type != 1 and $type != 2){
			print_r("无效参数");
			exit;
		}
		if($type == 1){
			$item = lhhItems::model()->findByAttributes(array("itemid"=>$itemid));
			$picid = $item->picid;
			if(empty($item)){
				print_r("文件不存在");
				exit;
			}
			
			$attachs = lhhAttach::model()->findAllBySql('select * from supe_lhhonline_attachments where aid!='.$picid.' and itemid='.$itemid.' order by aid');
			$this->renderxml($attachs,"attachments");
			
		}else if($type == 2){
			$item = mhItems::model()->findByAttributes(array("itemid"=>$itemid));
			$picid = $item->picid;
			if(empty($item)){
				print_r("文件不存在");
				exit;
			}
			
			$attachs = mhAttach::model()->findAllBySql('select * from supe_mh_attachments where aid!='.$picid.' and itemid='.$itemid.' order by aid');
			$this->renderxml($attachs,"lhhfiles");
		}
	}
	function renderxml($attachs,$type){
		$size = getimagesize($type.'/'.$attachs[0]->filepath);
		$xml = '<content width="'.$size[0].'" height="'.$size[1].'" bgcolor="green" loadercolor="ffffff" panelcolor="5d5d61" buttoncolor="5d5d61" textcolor="ffffff">';
		
		foreach($attachs as $key=>$page){
			$xml .= '<page src="'.$type.'/'.$page->filepath.'"/>';
		}
			
		$xml .= '</content>';
		print_r($xml);
	}
	/**
		读取具体的文章列表
	*/
	function actionNews(){

	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}