<?php

class EncyclopediaController extends Controller
{
	public function actionIndex()
	{
		$cats = array(41,40,17,42);
		$catname = array("发展简史","常识浅说","连坛资料","创作实践");
		$this->render('index');
		$sql = "select * from supe_mainspaceitems where catid in(40,41,17,42) order by dateline desc limit 0,20";
		$top10 = spaceitems::model()->findAllBySql($sql);
		echo $top10;
	}
	public function actionCategories(){
		$catid = intval($_GET['catid'])?$_GET['catid']:-1;
		$page = intval($_GET['page']) ? $_GET['page'] : 1;
		$perpage = 20;
		$start = $perpage*($page-1);
		if($catid == 41 || $catid== 40 || $catid == 17 || $catid == 42){
			$sql = "select * from supe_mainspaceitems where catid=".$catid." order by dateline desc limit ".$start.",".$perpage;
			$lists = spaceitems::model()->findAllBySql($sql);
			$countsSql = "select count(*) from supe_mainspaceitems where catid=".$catid." order by dateline desc";
			$total = spaceitems::model()->countBySql($allSql);

		}else{
			print_r("arguments error");
		}
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