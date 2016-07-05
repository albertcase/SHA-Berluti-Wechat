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
		$this->render('index');
	}

	public function actionForm()
	{
		$this->render('form');
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
		$this->render('Kol');
	}

	public function actionPro()
	{
		$this->render('pro');
	}

	public function actionVideoDetailed()
	{
		$this->render('videodetailed');
	}

	public function actionKolDetailed()
	{
		$this->render('Koldetailed');
	}

	public function actionProDetailed()
	{
		$this->render('prodetailed');
	}

}