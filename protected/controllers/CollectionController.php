<?php

class CollectionController extends Controller
{
	public function actionTest(){
		
		$s = lhhTags::model()->findAll();
		$test = array();
		foreach ($s as $key => $value) {
			$s[$key]->tttag = "abc";
		}
		var_dump($s);
	}
	public function actionIndex()
	{
		//exit;
		//$this->smarty = Yii::app()->smarty;
		$page = intval($_GET['page']) ? $_GET['page'] : 1;
		$tagid = intval($_GET['tagid']) ? $_GET['tagid'] : -1;
		$start = ($page-1) * 12;
		$end = 12;
		$catid = intval($_GET['catid'])  ? $_GET['catid']:-1;
		$where = $catid > 0 ? " where catid=".$catid : "";
		$tagTable = lhhTags::model()->findByPk($tagid);
		$listSql = "";
		if(empty($tagTable)){
			$listSql = 'select subject,picid,itemid,catid from supe_lhhonline_spaceitems '.$where.' limit '.$start.','.$end;
			$allSql = "select count(*) from supe_lhhonline_spaceitems ".$where;		
		}else{

			$listSql = "select ii.itemid,ii.relativetags,i.subject,i.picid,i.itemid,i.catid from supe_lhhonline_spaceitems as i,supe_lhhonline_spacenews as ii where i.itemid=ii.itemid and INSTR(ii.relativetags,'".$tagTable['tagname']."')>0";
			$allSql = "select count(*) from supe_lhhonline_spaceitems as i,supe_lhhonline_spacenews as ii where i.itemid=ii.itemid and INSTR(ii.relativetags,'".$tagTable['tagname']."')>0";
			if($catid > 0){
				$listSql=$listSql." and i.catid=".$catid;
				$allSql = $allSql." and i.catid=".$catid;
			}
			$listSql.=" limit ".$start.",".$end;
		}
		$lhh = lhhItems::model()->findAllBySql($listSql);
		
		$itemtotal = lhhItems::model()->countBySql($allSql);
		$i =0;
		$return = array();
		$tags = lhhTags::model()->findAll();
		foreach ($lhh as $key => $value) {
			
				$thumbpath = lhhAttach::model()->findByAttributes(array("aid"=>$value['picid']));
				$return[] = array(
					"subject" => $value['subject'],
					'picid' => $value['picid'],
					'itemid'=>$value['itemid'],
					'thumbpath'=>$thumbpath['filepath']
				);
			
			
			
			//$lhh[$key]->thumbpath = $thumbpath->thumbpath; 
			$i++;
		}
		$categories = lhhCategories::model()->findAllBySql('select * from supe_lhhonline_categories');
		$totalpage = $itemtotal == 0 ? 1 : ceil($itemtotal/12);
		$this->render('index',array("lhh"=>$return,"categories"=>$categories,"total"=>$itemtotal,"totalpage"=>$totalpage,"page"=>$page,"catid"=>$catid,"tagid"=>$tagid,"tags"=>$tags)); 
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