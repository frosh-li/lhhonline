<?php

class ImportFileController extends Controller
{
	
	public function actionIndex()
	{
		
	}
	// 读取分类数据
	public function actionReadAll(){
		$dir = "./lhhfiles/lhh/";
		$fso = dir($dir);
		while(false !== ($file = $fso->read())){
			if(!is_dir($file)){
				print_r("Top Level:".$file."<br>...........................................<br>");
				$this->insertData($dir.$file,$file);
			}
		}
		$fso->close();
	}
	// 读取具体每本书
	public function insertData($dir,$cat){
		//$subject = $_GET['subject'];
		
		$folder = $dir;
		$fso1 = opendir($folder);
		while($file = readdir($fso1)){
			if(!is_dir($file)){
				print_r("Book Name:".$file."<br/>");
				$this->getBookList($folder."/".$file,$file,$cat);
			}
		}
		closedir($fso1);
	}
	// 读取具体的图片列表数据
	public function getBookList($dir,$subject,$cat){
		//$dir="./lhhfiles/lhh/成语故事/蝶花测试";
		$fso2 = opendir($dir);
		$cats = lhhCategories::model()->findByAttributes(array("name"=>$cat));
		$item = new lhhItems;
		$item->catid = $cats->catid;
		$item->subject = $subject;
		if($item->save()){
			$itemid = $item->itemid;
			print_r($itemid);
			while($file = readdir($fso2)){
				$filename = $this->guid();
				if(!is_dir($file)){
					
					
					$ext = pathinfo($file);
					$ext = strtolower($ext['extension']);
					print_r($filename.".".$ext);
					copy($dir."/".$file,"./attachments/auto/".$filename.".".$ext);
					$attachModel = new lhhAttach;
					$attachModel->itemid = $itemid;
					$attachModel->catid = $cats->catid;
					$pattern = '/[^\d]/i';
					
					$attachModel->filename = preg_replace($pattern,"",$file);
					$attachModel->subject = $file;
					$attachModel->attachtype = $ext;
					$attachModel->isimage = 1;
					$attachModel->filepath = "auto/".$filename.".".$ext;
					if($attachModel->save()){
						print_r("fileName:".$file."	&nbsp 保存成功<br/>");
					}
				}
				
			}
		}
		closedir($fso2);
	}
	// 获取文件
	public function actionGetFiles(){
		//$this->layout = false; 
		$base_dir = "./lhhfiles";
		//header('Content-type: text/html'); 
		$lists = mhCategories::model()->findAll();
		$i = 0;
		while($categorie = $lists[$i]){
			var_dump($categorie->name);
			mkdir($base_dir."/other/".$categorie->name,0777);
			$i++;
		}
		$lists = lhhCategories::model()->findAll();
		$i = 0;
		while($categorie = $lists[$i]){
			var_dump($categorie->name);
			mkdir($base_dir."/lhh/".$categorie->name,0777);
			$i++;
		}
		/*
		$fso = opendir($base_dir);
		while($dir=readdir($fso)){
			var_dump($dir);
		}
		closedir($fso);
		*/
		//Yii::app()->end();
	}
	public function actionUpdateAttach(){
		header('Content-type: text/html'); 
		$lists = lhhAttach::model()->findAll();
		$i = 0;
		while($list = $lists[$i]){
			$filename = $list->filename;
			//$model = lhhAttach::model()->findByAttributes(array("aid"=>$list->aid));
			
			$filename = intval($filename);
			$list->filename = $filename;
			if($list->save()){
				echo $list->aid;
			};
			$i++;
		    ob_flush();
		    flush();
			sleep(1);
		}
		Yii::app()->end();
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
	public function guid(){
    //if (function_exists('com_create_guid')){ 
   //     return com_create_guid();
   // }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12);
                //.chr(125);// "}"
        return $uuid;
    //}
}
}