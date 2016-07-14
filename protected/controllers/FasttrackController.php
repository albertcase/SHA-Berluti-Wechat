<?php

class FasttrackController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public $layout='//layouts/fasttrack';

	public function actionIndex()
	{
		if(!isset($_SESSION['weixin_base_id'])){
			Header("Location:/weixin/oauth2?callback=/fasttrack");
			exit;
		}
		$this->render('index');
	}

	public function actionForm()
	{
		if(!isset($_SESSION['weixin_base_id'])){
			Header("Location:/weixin/oauth2?callback=/fasttrack/form");
			exit;
		}
		$ballotObj = new Ballot();
	    $info = $ballotObj->getInfo($_SESSION['weixin_base_id']);
		$this->render('form', array('info' => $info));
	}

	public function actionVote()
	{
		$this->render('vote');
	}

	public function actionVideo()
	{
		$this->render('video');
	}

	public function actionKol()
	{
		$this->render('kol');
	}

	public function actionPro()
	{
		$this->render('pro');
	}

	public function actionVideodetailed($id = '0')
	{
		$this->render('videodetailed',  array('id' => $id));
	}

	public function actionKoldetailed($id = '0')
	{
		$this->render('koldetailed',  array('id' => $id));
	}

	public function actionProdetailed($id = '0')
	{
		$this->render('prodetailed',  array('id' => $id));
	}



}