<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionIndex()
	{
		if(!isset($_SESSION['weixin_base_id'])){
			Header("Location:/weixin/oauth2?callback=/");
			exit;
		}
		$this->render('index');
	}

	public function actionSpring()
	{
		$this->render('spring');
	}

	public function actionProduct(){
		$this->render('product');
	}

	public function actionFounder(){
		$this->render('founder');
	}

	public function actionHistory(){
		$this->render('history');
	}

	public function actionGuide(){
		$this->render('guide');
	}

	public function actionList(){
		$sql = "select * from same_store";
		$storeList = Yii::app()->db->createCommand($sql)->queryAll();
		$newList=array();
		for ($i = 0; $i < count($storeList); $i++) {
			$newList[$storeList[$i]['country']][] = $storeList[$i];
		}
		$this->render('list', array('storeList' => $newList));
	}

	public function actionStore($id)   //actionStore($id)
	{
		$sql = "select * from same_store where id = ".intval($id);
		$store = Yii::app()->db->createCommand($sql)->queryRow();
		$this->render('store', array('store' => $store));
		//$this->render('store');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}